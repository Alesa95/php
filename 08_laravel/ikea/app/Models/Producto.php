<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function tiendas() {
        return $this->belongsToMany(
            Tienda::class,
            'productos_tiendas',
            'producto_id',
            'tienda_id'
        );
    }
}
