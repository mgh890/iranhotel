<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Images
 *
 * @mixin \Eloquent
 */
class Images extends Model
{
    protected $fillable=['name','src','packages_id','article_id'];
}
