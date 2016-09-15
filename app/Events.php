<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = ['eventTitle','eventDate','eventTime','eventDescription'];
}
