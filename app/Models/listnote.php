<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class listnote extends Model
{
    use HasFactory;
    protected $table = "listnotes";
    public $timestamps = false;
    use SoftDeletes;   
    public function user() {

        return $this->hasOne(user::class);
        }
}
