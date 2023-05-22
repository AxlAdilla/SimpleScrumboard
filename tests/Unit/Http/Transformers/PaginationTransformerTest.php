<?php

namespace Tests\Unit\Http\Transformers;

use Tests\TestCase;
use Modules\Scrumboard\Entities\Card;
use Modules\Scrumboard\Entities\Board;
use Illuminate\Support\Facades\Artisan;
use App\Http\Transformers\PaginationTransformer;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PaginationTransformerTest extends TestCase
{
    use RefreshDatabase;

    public $card;
    public function setUp():void {
        parent::setUp();
        Artisan::call('migrate:fresh', [
            '--env' => 'testing',
        ]);
        Artisan::call('module:seed', [
            'Scrumboard',
            '--env' => 'testing',
        ]);
        $this->card = Card::query()->paginate(5);
    }

    public function test_paginate_transformer_link(): void
    {
        $data = new PaginationTransformer($this->card);
        $link = $data->links();
        $this->assertArrayHasKey('first', $link);
        $this->assertArrayHasKey('last', $link);
        $this->assertArrayHasKey('prev', $link);
        $this->assertArrayHasKey('next', $link);
    }

    public function test_paginate_transformer_meta(): void
    {
        $data = new PaginationTransformer($this->card);
        $meta = $data->meta();
        $this->assertArrayHasKey('current_page', $meta);
        $this->assertArrayHasKey('from', $meta);
        $this->assertArrayHasKey('last_page', $meta);
        $this->assertArrayHasKey('path', $meta);
        $this->assertArrayHasKey('per_page', $meta);
        $this->assertArrayHasKey('to', $meta);
        $this->assertArrayHasKey('total', $meta);
    }
}
