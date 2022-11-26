<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class user extends Model
{
    use HasFactory;
    protected $table = "users";
    public $timestamps = false;

    public function adminuser() {

        return $this->belongsTo(adminuser::class);
        } 

        public function note() {

            return $this->belongsTo(note::class);
        }

        public function listnote() {

            return $this->belongsTo(listnote::class);
        }

        public function imagenote() {

            return $this->belongsTo(imagenote::class);
        }

        use SoftDeletes;   
}
