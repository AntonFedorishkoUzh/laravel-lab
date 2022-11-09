<?php

namespace App\Telegram;

use App\Models\Chat;
use App\Models\ChatParticipant;
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
        $bot_chat = $this->getUpdate()->getChat();
        $chat = Chat::firstOrCreate([
            'name' => 'coffee'
        ]);

        $participant = new ChatParticipant();
        $participant->bot_chat_id   = $bot_chat->id;
        $participant->first_name    = $bot_chat->firstName;
        $participant->last_name     = $bot_chat->lastName;
        $participant->username      = $bot_chat->username;
        $participant->chat_id       = $bot_chat->id;

        try{
            $participant->save();
            $this->replyWithMessage(['text' =>'You are registered']);
        }catch (\Exception $e){
            $this->replyWithMessage(['text' => $e->getMessage()]);
        }
    }
}
