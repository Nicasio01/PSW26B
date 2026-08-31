<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
     public function direcciones(): HasMany
    {
        return $this->hasMany(Direccion::class);
    }

     public function carreras (): BelongsToMany
    {
        return $this->belongsToMany(Carrera::class);
    }
}
