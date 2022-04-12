<?php

namespace Leonard133\DiscordErrorTracking\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Leonard133\DiscordErrorTracking\DiscordErrorTrackingServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Leonard133\\DiscordErrorTracking\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            DiscordErrorTrackingServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_discord-error-tracking_table.php.stub';
        $migration->up();
        */
    }
}
