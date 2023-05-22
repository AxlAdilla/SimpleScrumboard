<?php

namespace Modules\Scrumboard\Tests\Unit\Http\Controllers\Api;

use Tests\TestCase;
use Modules\Scrumboard\Entities\Card;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CardControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp():void {
        parent::setUp();

        Artisan::call('migrate:fresh', [
            '--env' => 'testing',
        ]);
        Artisan::call('module:seed', [
            'Scrumboard',
            '--env' => 'testing',
        ]);
    }
    
    public function test_card_get_paginate()
    {
        Card::factory(6)->create();
        $pagination = Card::paginate();
        $this->assertInstanceOf(LengthAwarePaginator::class, $pagination);
    }

    public function test_card_get_first()
    {
        Card::factory()->create();
        $card = Card::first();
        $data = $card->toArray();

        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('title', $data);
        $this->assertArrayHasKey('description', $data);
        $this->assertArrayHasKey('color', $data);
        $this->assertArrayHasKey('board_id', $data);
        $this->assertArrayHasKey('created_at', $data);
        $this->assertArrayHasKey('updated_at', $data);
    }
}
