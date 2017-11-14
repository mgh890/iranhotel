<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\LevelPackage
 *
 * @mixin \Eloquent
 */
class LevelPackage extends Model
{
    protected $fillable=['title','description','number','packages_id'];
}
