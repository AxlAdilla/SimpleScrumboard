<?php

namespace Modules\Scrumboard\Database\factories;

use Illuminate\Support\Str;
use Modules\Scrumboard\Entities\Board;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoardFactory extends Factory
{
    protected $model = Board::class;

    public function definition()
    {
        return [
            'name' => Str::random(10)
        ];
    }
}

