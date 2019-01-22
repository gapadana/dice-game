<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $table = 'games';

    protected $fillable = [
        'creator', 'max_score', 'lose_dice', 'dice_number', 'trow_limit'
    ];

}
