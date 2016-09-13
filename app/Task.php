<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['className', 'classInstructor', 'classTime', 'classDay', 'classLevel', 'updated_at'];
}
