<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Funny;
use Illuminate\Support\Facades\Log;

class JokeConversation extends Conversation
{
    protected $jokes;

    protected $jokeCount = 0;

    public function tellAJoke()
    {
        $this->checkForNextJoke();
    }

    public function checkForNextJoke()
    {
        if ($this->jokes->count()) {
            return $this->NextJoke($this->jokes->first());
        }

        $this->endJokes();
    }

    public function NextJoke($funny)
    {
        $question = Question::create($funny['question'])
            ->addButton(
                Button::create('Ano?')->value('ano')
            );

        $this->ask($question, function (Answer $answer) use ($funny) {
            if ($answer->getValue()) {
                $funnyko = Question::create($funny['answer'])
                    ->addButton(
                        Button::create('Luh sya isa pa nga')->value('isapa')
                    );
                
                $this->jokes->forget($funny['id']);

                $this->ask($funnyko, function (Answer $answer) {
                    $this->checkForNextJoke();
                });
            }
        });
    }

    public function endJokes()
    {
        $this->say('Next time ulet :p ');
    }

    public function run()
    {
        $this->jokes = collect(Funny::joke()->all())->shuffle();
        $this->jokeCount = $this->jokes->count();
        $this->jokes = $this->jokes->keyBy('id');
        $this->tellAJoke();
    }
}
