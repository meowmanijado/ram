<?php
use App\Http\Controllers\BotManController;
use BotMan\BotMan\BotMan;
use BotMan\Drivers\Facebook\Extensions\ElementButton;
use BotMan\Drivers\Facebook\Extensions\ButtonTemplate;
use Illuminate\Support\Facades\Log;
use BotMan\Drivers\Facebook\FacebookDriver;
use App\Conversations\JokeConversation;

$botman = resolve('botman');

$botman->hears('Hi', function (BotMan $bot) {
    $bot->reply('Hello! My name is Ram.');
    $bot->typesAndWaits(3);
    $bot->reply(
        ButtonTemplate::create('May joke ako')
        ->addButton(
            ElementButton::create('Ano')
            ->type('postback')
            ->payload('ano')
        )
    );
});

$botman->hears('ano', BotManController::class.'@startConversation');
