<?php

namespace App\Telegram;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class RCGenerateCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "random-coffee";

    /**
     * @var string Command Description
     */
    protected $description = "Generate pairs in RandomCoffee";

    /**
     * @inheritdoc
     */
    public function handle()
    {

    }
}
