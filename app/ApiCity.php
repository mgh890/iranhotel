<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiCity extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','utah','status','transfer'];
}
