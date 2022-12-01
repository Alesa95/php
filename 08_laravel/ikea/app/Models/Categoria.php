<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function productos() 
    {
        return $this->hasMany(Producto::class);

        /*
            Si la categoría tiene un id,
            y el producto un categoria_id,
            hasMany buscará en la tabla categorías
            todas las categorías cuyo categoria_id
            coincida con el id de la categoría
        */
    }
}
