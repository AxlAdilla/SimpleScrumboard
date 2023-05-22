<?php

namespace Modules\Scrumboard\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ScrumboardDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call([
            BoardTableSeeder::class,
            CardTableSeeder::class,
        ]);
    }
}
