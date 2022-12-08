<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    public function productos() {
        return $this->belongsToMany(
            Producto::class,
            'productos_tiendas',
            'producto_id',
            'tienda_id'
        );
    }
}
