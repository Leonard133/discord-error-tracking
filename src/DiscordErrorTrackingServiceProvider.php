<?php

namespace Leonard133\DiscordErrorTracking;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Leonard133\DiscordErrorTracking\Commands\DiscordErrorTrackingCommand;

class DiscordErrorTrackingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('discord-error-tracking')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_discord-error-tracking_table')
            ->hasCommand(DiscordErrorTrackingCommand::class);
    }
}
