<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Direccion extends Model
{
    protected $table = 'direcciones';

    public function alumno(): BelongsTo
    {
        return $this->belongsTo(Alumno::class);
    }

   
}
