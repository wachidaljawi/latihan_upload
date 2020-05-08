<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class barang extends Model
{
    protected $primaryKey = 'barang_id';
    protected $guarded = [];
    use SoftDeletes;
}
