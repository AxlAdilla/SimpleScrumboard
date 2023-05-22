<?php

namespace Modules\Scrumboard\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Scrumboard\Entities\Board;

class BoardTableSeeder extends Seeder
{
    public function run()
    {
        Board::firstOrCreate(['name' => 'Backlog']);
        Board::firstOrCreate(['name' => 'Stories']);
        Board::firstOrCreate(['name' => 'To Do']);
        Board::firstOrCreate(['name' => 'In Progress']);
        Board::firstOrCreate(['name' => 'To Verify']);
        Board::firstOrCreate(['name' => 'Done']);
    }
}
