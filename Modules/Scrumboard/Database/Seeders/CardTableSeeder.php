<?php

namespace Modules\Scrumboard\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Scrumboard\Entities\Card;

class CardTableSeeder extends Seeder
{
    public function run()
    {
        Card::factory()->count(15)->create();
    }
}
