<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['eventTitle','eventDate','eventTime','eventDescription'];
}
