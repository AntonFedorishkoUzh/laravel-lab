<?php

namespace App\Telegram;

use App\Models\ChatParticipant;
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
        $bot_chat = $this->getUpdate()->getChat();
        ChatParticipant::where('bot_chat_id', $bot_chat->id)->firstOrFail()->delete();

        $this->replyWithMessage(['text' =>'You are removed']);
    }
}
