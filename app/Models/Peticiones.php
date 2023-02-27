<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Categoria;

class Peticiones extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'destinatario', 'image', 'categoria_id'];

    public function firmas()
    {
        return $this->belongsToMany(User::class, 'peticiones_users', 'peticiones_id', 'users_id');
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
