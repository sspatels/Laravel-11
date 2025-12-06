<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class demo extends Model
{
    protected $table = 'new_demos';
    protected $primaryKey = 'demo_id';
    public $timestamps = false;
}
