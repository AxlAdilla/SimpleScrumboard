<?php

namespace Modules\Scrumboard\Tests\Unit\Database\Migrations;

use Tests\TestCase;

class CreateCardTest extends TestCase
{
    public function test_success_migration()
    {
        $this->artisan('migrate:fresh', [
            '--path' => 'Modules/Scrumboard/Database/Migrations/2023_05_22_020410_create_cards_table.php',
            '--env' => 'testing',
        ])->assertExitCode(0);
    }
}
