<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use SoftDeletes;
    protected $table = 'member';
    protected $fillable = ['name', 'telephone', 'email'];
}
