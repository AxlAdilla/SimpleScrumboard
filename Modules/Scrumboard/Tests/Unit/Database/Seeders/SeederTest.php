<?php

namespace Modules\Scrumboard\Tests\Unit\Database\Seeders;

use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class SeederTest extends TestCase
{
    public function setUp():void {
        parent::setUp();

        Artisan::call('migrate:fresh', [
            '--env' => 'testing',
        ]);
    }

    public function test_seeding_board_database()
    {
        $this->artisan('db:seed', [
            '--class' => '\Modules\Scrumboard\Database\Seeders\BoardTableSeeder',
            '--env' => 'testing',
        ])->assertExitCode(0);
    }

    public function test_seeding_card_database()
    {
        $this->artisan('db:seed', [
            '--class' => '\Modules\Scrumboard\Database\Seeders\BoardTableSeeder',
            '--env' => 'testing',
        ]);
        $this->artisan('db:seed', [
            '--class' => 'Modules\Scrumboard\Database\Seeders\CardTableSeeder',
            '--env' => 'testing',
        ])->assertExitCode(0);
    }
}
