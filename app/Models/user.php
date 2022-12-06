<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class user extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "users";
    public $timestamps = false;

    public function note() {
        return $this->belongsTo(note::class, 'note_id', 'id');
    }
 
    public function listnote() {
        return $this->belongsTo(listnote::class, 'listnote_id', 'id');
    }
    
    public function imagenote() {

        return $this->belongsTo(imagenote::class, 'imagenote_id', 'id');
    }  
}
