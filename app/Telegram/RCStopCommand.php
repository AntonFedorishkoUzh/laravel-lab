<?php

namespace App\Telegram;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class RCStopCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "stop";

    /**
     * @var string Command Description
     */
    protected $description = "Stop RandomCoffee";

    /**
     * @inheritdoc
     */
    public function handle()
    {

    }
}
