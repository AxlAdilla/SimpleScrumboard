<?php

namespace Modules\Scrumboard\Database\factories;

use Faker\Generator as Faker;
use Modules\Scrumboard\Entities\Card;
use Modules\Scrumboard\Entities\Board;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Artisan;

class CardFactory extends Factory
{
    protected $model = Card::class;

    public function definition()
    {
        $faker = \Faker\Factory::create();
        $board = Board::pluck('id')->toArray();

        return [
            'title'=> $faker->realText(15,),
            'board_id'=> $faker->randomElement($board),
            'color'=> $faker->hexColor(),
            'description' => $faker->realText(50,)
        ];
    }
}

