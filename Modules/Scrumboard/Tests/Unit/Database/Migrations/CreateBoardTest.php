<?php

namespace Modules\Scrumboard\Tests\Unit\Database\Migrations;

use Tests\TestCase;

class CreateBoardTest extends TestCase
{
    public function test_success_migration()
    {
        $this->artisan('migrate:fresh', [
            '--path' => 'Modules/Scrumboard/Database/Migrations/2023_05_22_020357_create_boards_table.php',
            '--env' => 'testing',
        ])->assertExitCode(0);
    }
}
