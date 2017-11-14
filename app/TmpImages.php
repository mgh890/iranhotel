<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TmpImages extends Model
{
    protected $fillable=['name','src','packages_id','article_id'];
}
