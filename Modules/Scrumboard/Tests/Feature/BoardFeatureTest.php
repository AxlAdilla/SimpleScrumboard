<?php

namespace Modules\Scrumboard\Tests\Feature;

use Tests\TestCase;
use Modules\Scrumboard\Entities\Board;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BoardFeatureTest extends TestCase
{
    use RefreshDatabase;

    public $successStructure;
    public $successAllStructure;
    public $failedStructure;
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
                'name',
                'created_at',
                'updated_at',
            ],
            'additional',
            'links',
            'meta',
        ];
        $this->successAllStructure = [
            'success',
            'code',
            'http_code',
            'locale',
            'message',
            'data' => [
                [
                    'id',
                    'name',
                    'created_at',
                    'updated_at',
                ]
            ],
            'additional',
            'links',
            'meta',
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

    public function test_board_index_success()
    {
        $response = $this->get(route('board.index'));

        $response->assertStatus(200);
        $response->assertJsonStructure($this->successAllStructure);
    }
    
    public function test_board_detail_success()
    {
        $id = Board::first()->id;
        $response = $this->get(
            route('board.show', ['id' => $id]),
            ['Accept' => 'application/json']
        );

        $response->assertStatus(200);
        $response->assertJsonStructure($this->successStructure);
    }

    public function test_board_detail_failed()
    {
        $id = -1;
        $response = $this->get(
            route('board.show', ['id' => $id]),
            ['Accept' => 'application/json']
        );

        $response->assertStatus(422);
        $response->assertJsonStructure($this->failedStructure);
    }
}
