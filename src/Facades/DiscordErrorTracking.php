<?php

namespace Leonard133\DiscordErrorTracking\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Leonard133\DiscordErrorTracking\DiscordErrorTracking
 */
class DiscordErrorTracking extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'discord-error-tracking';
    }
}
