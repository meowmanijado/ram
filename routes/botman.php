<?php
use App\Http\Controllers\BotManController;
use BotMan\BotMan\BotMan;
use BotMan\Drivers\Facebook\Extensions\ElementButton;
use BotMan\Drivers\Facebook\Extensions\ButtonTemplate;
use Illuminate\Support\Facades\Log;
use BotMan\Drivers\Facebook\FacebookDriver;
use App\Conversations\JokeConversation;
use BotMan\Drivers\Facebook\Extensions\MediaTemplate;
use BotMan\Drivers\Facebook\Extensions\MediaUrlElement;
use BotMan\Drivers\Facebook\Extensions\MediaAttachmentElement;

$botman = resolve('botman');

$botman->hears('GET_STARTED', function (BotMan $bot) {
    $user = $bot->getUser();

    $bot->reply('Hello '. $user->getFirstName() .'! Welcome to Geekery. My name is Ram.');

    $bot->typesAndWaits(3);
    $bot->reply(
        ButtonTemplate::create('Gusto mo ng joke? :D')
        ->addButton(
            ElementButton::create('G!')
            ->type('postback')
            ->payload('ano')
        )
        ->addButton(
            ElementButton::create(('Nope, may ask lang me'))
            ->type('postback')
            ->payload('notnow')
        )
    );
});

$botman->hears('ano', BotManController::class.'@startConversation');

$botman->hears('notnow', function (BotMan $bot) {
    $bot->reply('Happy to serve :) What can I do for you?');
});
