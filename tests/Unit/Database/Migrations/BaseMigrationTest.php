<?php

namespace Tests\Unit\Database\Migrations;

use Tests\TestCase;

class BaseMigrationTest extends TestCase
{
    public function test_base_migration_user(): void
    {
        $this->artisan('migrate:fresh', [
            '--path' => '/database/migrations/2014_10_12_000000_create_users_table.php',
            '--env' => 'testing'
        ])->assertExitCode(0);
    }

    public function test_base_migration_reset_token(): void
    {
        $this->artisan('migrate:fresh', [
            '--path' => '/database/migrations/2014_10_12_100000_create_password_reset_tokens_table.php',
            '--env' => 'testing'
        ])->assertExitCode(0);
    }

    public function test_base_migration_failed_jobs(): void
    {
        $this->artisan('migrate:fresh', [
            '--path' => '/database/migrations/2019_08_19_000000_create_failed_jobs_table.php',
            '--env' => 'testing'
        ])->assertExitCode(0);
    }

    public function test_base_migration_personal_access_token(): void
    {
        $this->artisan('migrate:fresh', [
            '--path' => '/database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php',
            '--env' => 'testing'
        ])->assertExitCode(0);
    }
}
