<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    // Una respuesta pertenece a un comentario
    public function comment(){
        return $this->belongsTo(Comment::class);
    }

    // Una respuesta pertenece a un usuario
    public function user(){
        return $this->belongsTo(User::class);
    }
}
