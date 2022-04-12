<?php

namespace Leonard133\DiscordErrorTracking\Commands;

use Illuminate\Console\Command;

class DiscordErrorTrackingCommand extends Command
{
    public $signature = 'discord-error-tracking';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
