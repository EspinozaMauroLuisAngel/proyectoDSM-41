<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class note extends Model
{
    use HasFactory;
    protected $table = "notes";
    public $timestamps = false;
    use SoftDeletes;   
    public function user() {

        return $this->hasOne(user::class);
        }

}
