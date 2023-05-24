<?php

namespace Modules\Scrumboard\Tests\Unit\Http\Transformers;

use Tests\TestCase;
use Modules\Scrumboard\Entities\Board;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Scrumboard\Http\Transformers\BoardTransformer;

class BoardTransformerTest extends TestCase
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

    public function test_board_transformer_data()
    {
        $board = Board::with('cards')->first();
        $boardTransformer = (new BoardTransformer($board))->data();

        $this->assertArrayHasKey('id', $boardTransformer);
        $this->assertArrayHasKey('name', $boardTransformer);
        $this->assertArrayHasKey('created_at', $boardTransformer);
        $this->assertArrayHasKey('updated_at', $boardTransformer);
        $this->assertArrayHasKey('cards', $boardTransformer);
    }
}
