<?php

namespace Modules\Scrumboard\Tests\Feature;

use Tests\TestCase;
use Modules\Scrumboard\Entities\Card;
use Modules\Scrumboard\Entities\Board;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CardFeatureTest extends TestCase
{
    use RefreshDatabase;

    public $successPaginationStructure;
    public $failedStructure;
    public $successStructure;
    public function setUp():void {
        parent::setUp();
        Artisan::call('migrate:fresh', [
            '--env' => 'testing',
        ]);
        Artisan::call('module:seed', [
            'Scrumboard',
            '--env' => 'testing',
        ]);
        $this->successStructure = [
            'success',
            'code',
            'http_code',
            'locale',
            'message',
            'data' => [
                'id',
                'title',
                'description',
                'color',
                'board_id',
                'created_at',
                'updated_at',
            ],
            'additional',
            'links',
            'meta',
        ];
        $this->successPaginationStructure = [
            'success',
            'code',
            'http_code',
            'locale',
            'message',
            'data' => [
                [
                    'id',
                    'title',
                    'description',
                    'color',
                    'board_id',
                    'created_at',
                    'updated_at',
                ]
            ],
            'additional',
            'links' => [
                'first',
                'last',
                'prev',
                'next',
            ],
            'meta' => [
                'current_page',
                'from',
                'last_page',
                'path',
                'per_page',
                'to',
                'total',
            ],
        ];
        $this->failedStructure = [
            'success',
            'code',
            'http_code',
            'locale',
            'message',
            'debug',
            'exception',
            'additional',
            'links',
            'meta',
        ];
    }

    public function test_card_index_success()
    {
        $response = $this->get(route('card.index'));

        $response->assertStatus(200);
        $response->assertJsonStructure($this->successPaginationStructure);
    }
    
    public function test_card_detail_success()
    {
        $id = Card::first()->id;
        $response = $this->get(
            route('card.show', ['id' => $id]),
            ['Accept' => 'application/json']
        );

        $response->assertStatus(200);
        $response->assertJsonStructure($this->successStructure);
    }

    public function test_board_detail_failed()
    {
        $id = -1;
        $response = $this->get(
            route('card.show', ['id' => $id]),
            ['Accept' => 'application/json']
        );

        $response->assertStatus(422);
        $response->assertJsonStructure($this->failedStructure);
    }

    public function test_card_store_success()
    {
        $board = Board::pluck('id')->toArray();
        $faker = \Faker\Factory::create();
        $data = [
            'title'=> $faker->realText(15,),
            'description' => $faker->realText(50,),
            'color'=> $faker->hexColor(),
            'board_id'=> $faker->randomElement($board),
        ];
        $response = $this->post(
            route('card.store'),
            $data,
            ['Accept' => 'application/json']
        );

        $response->assertStatus(201);
        $response->assertJsonStructure($this->successStructure);
    }

    public function test_card_store_failed()
    {
        $data = [];
        $response = $this->post(
            route('card.store'),
            $data,
            ['Accept' => 'application/json']
        );

        $response->assertStatus(422);
        $response->assertJsonStructure($this->failedStructure);
    }

    public function test_card_edit_success()
    {
        $board = Board::pluck('id')->toArray();
        $faker = \Faker\Factory::create();
        $data = [
            'title'=> $faker->realText(15,),
            'description' => $faker->realText(50,),
            'color'=> $faker->hexColor(),
            'board_id'=> $faker->randomElement($board),
        ];
        $card = Card::factory()->create();

        $response = $this->put(
            route('card.edit', ['id'=>$card->id]),
            $data,
            ['Accept' => 'application/json']
        );

        $response->assertStatus(201);
        $response->assertJsonStructure($this->successStructure);
    }

    public function test_card_edit_failed()
    {
        $card = -1;

        $response = $this->put(
            route('card.edit', ['id'=>$card]),
            [],
            ['Accept' => 'application/json']
        );

        $response->assertStatus(422);
        $response->assertJsonStructure($this->failedStructure);
    }

    public function test_card_delete_success()
    {
        $card = Card::factory()->create();

        $response = $this->delete(
            route('card.delete', ['id'=>$card->id]),
            [],
            ['Accept' => 'application/json']
        );

        $response->assertStatus(200);
        $response->assertJsonStructure($this->successStructure);
    }

    public function test_card_delete_failed()
    {
        $card = -1;

        $response = $this->delete(
            route('card.edit', ['id'=>$card]),
            [],
            ['Accept' => 'application/json']
        );

        $response->assertStatus(422);
        $response->assertJsonStructure($this->failedStructure);
    }
}
