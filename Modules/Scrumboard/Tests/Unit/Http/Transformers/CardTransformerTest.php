<?php

namespace Modules\Scrumboard\Tests\Unit\Http\Transformers;

use Tests\TestCase;
use Modules\Scrumboard\Entities\Card;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Scrumboard\Http\Transformers\CardTransformer;

class CardTransformerTest extends TestCase
{
    use RefreshDatabase;

    public $card;
    public function setUp():void {
        parent::setUp();
        $this->card = Card::factory()->create();
    }

    public function test_card_transformer_get_data()
    {
        $data = (new CardTransformer($this->card))->data();

        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('title', $data);
        $this->assertArrayHasKey('description', $data);
        $this->assertArrayHasKey('color', $data);
        $this->assertArrayHasKey('board_id', $data);
        $this->assertArrayHasKey('created_at', $data);
        $this->assertArrayHasKey('updated_at', $data);
    }
}
