<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TmpSession extends Model
{
    protected $fillable = ['session_tmp', 'email_user'];
}
