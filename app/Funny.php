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
                'question'  => 'Which super hero is the most curious?',
                'answer'    =>  'Wonder woman'
            ],
            [
                'id'        =>  1,
                'question'  => 'Anong thor ang paboritong pagkain ni Thor?',
                'answer'    =>  'Edi Thortang talong'
            ]
        ]);
    }
}
