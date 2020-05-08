<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class toko extends Model
{
    protected $guarded = [];
    use SoftDeletes;
}
