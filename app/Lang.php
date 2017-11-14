<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Lang
 *
 * @mixin \Eloquent
 */
class Lang extends Model
{
    protected $fillable=['country','name','icon',];
    
}