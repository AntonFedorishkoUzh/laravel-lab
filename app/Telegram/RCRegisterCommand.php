<?php

namespace App\Telegram;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class RCRegisterCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "register";

    /**
     * @var string Command Description
     */
    protected $description = "Register for RandomCoffee";

    /**
     * @inheritdoc
     */
    public function handle()
    {
        $replyMarkup = array(
            'keyboard' => array(
                array("A", "B")
            )
        );
        $encodedMarkup = json_encode($replyMarkup);
        $text = array(
                'reply_markup' => $encodedMarkup,
                'text' => "Test"
        );
        $this->replyWithMessage(compact('text'));

    }
}
