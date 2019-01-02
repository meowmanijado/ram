<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Funny extends Model
{
    public static function joke()
    {
        return collect([
            [
                'id'        => 0,
                'question'  => 'Sinong superhero ang mukhang pwet?',
                'answer'    => 'Edi si BUTTman (batman) 😂'
            ],
            [
                'id'        =>  1,
                'question'  => 'Anong thor ang paboritong pagkain ni Thor?',
                'answer'    =>  'Edi Thortang talong :p'
            ],
            [
                'id'        =>  3,
                'question'  => 'Sinong superhero ang nandyadyan?',
                'answer'    => 'Edi si There!devil (Daredevil) 😂'
            ],
            [
                'id'        =>  4,
                'question'  => 'Sinong superhero ang nabulok na?',
                'answer'    => 'Edi si Na PANISher (The Punisher) 😂'
            ],
            [
                'id'        =>  5,
                'question'  => 'Sinong Superhero ang bulok?',
                'answer'    => 'Edi si The incrediBULOK (The Incredible Hulk) 😂'
            ],
            [
                'id'        =>  6,
                'question'  => 'Sinong superhero ang nagcocommute?',
                'answer'    => 'Edi si BUS Lightyear (Buzz Lightyear) 😂'
            ],
            [
                'id'        =>  7,
                'question'  => 'Sinong superhero ang mayroong maraming mata?',
                'answer'    => 'Edi si EYES-man (Iceman) 😂'
            ],
            [
                'id'        =>  8,
                'question'  => 'Sinong superhero ang may-ari ng isang store?',
                'answer'    => 'Edi si Store-m (Storm) 😂'
            ],
            [
                'id'        =>  9,
                'question'  => 'Sinong superhero ang mahilig sa sapatos?',
                'answer'    => 'Edi si Shoeperman (Superman) :p'
            ],
            [
                'id'        =>  10,
                'question'  => 'Sinong superhero ang sobrang taba?',
                'answer'    => 'Edi si Fatman (Batman) 😂'
            ],
            [
                'id'        =>  11,
                'question'  => 'Sinong superhero ang mahilig sa caffeine?',
                'answer'    => 'Edi si Caffeine Varvel!! (Captain Barbel) 😂'
            ],
            [
                'id'        =>  12,
                'question'  => 'Bakit S ang nasa damit ni superman..?',
                'answer'    => 'Kasi walang medium 🤣'
            ],
        ]);
    }
}
