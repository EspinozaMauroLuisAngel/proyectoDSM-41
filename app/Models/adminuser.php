<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class adminuser extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "adminusers";
    public $timestamps = false;

    public function user() {
        return $this->hasOne(user::class, 'user_id', 'id');

    }    
}

