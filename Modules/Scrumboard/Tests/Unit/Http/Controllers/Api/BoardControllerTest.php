<?php

namespace Modules\Scrumboard\Tests\Unit\Http\Controllers\Api;

use Tests\TestCase;
use Modules\Scrumboard\Entities\Board;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BoardControllerTest extends TestCase
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
    
    public function test_can_return_list_of_model()
    {
        $board = Board::with(['cards'])->get();

        $this->assertInstanceOf(Collection::class, $board);
    }

    public function test_can_return_with_cards_model()
    {
        $board = Board::with(['cards'])->first();
        $data = $board->toArray();

        $this->assertArrayHasKey('cards', $data);
        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('name', $data);
        $this->assertArrayHasKey('created_at', $data);
        $this->assertArrayHasKey('updated_at', $data);
    }
}
