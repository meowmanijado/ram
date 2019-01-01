<?php
use App\Http\Controllers\BotManController;
use BotMan\BotMan\BotMan;
use BotMan\Drivers\Facebook\Extensions\ElementButton;
use BotMan\Drivers\Facebook\Extensions\ButtonTemplate;
use Illuminate\Support\Facades\Log;

$botman = resolve('botman');

$botman->hears('GET_STARTED', function (BotMan $bot) {
    Log::info('working');
    $bot->reply(
        ButtonTemplate::create('Gusto mo ng joke?')
        ->addButton(
            ElementButton::create('Yessur')
            ->type('postback')
            ->payload('yessur')
        )
    );
});

$botman->hears('yessur', BotManController::class.'@startConversation');
