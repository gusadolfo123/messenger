<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // defino que se castee a boolean el campo written-by-me
    protected $casts = ['written_by_me' => 'boolean'];
}
