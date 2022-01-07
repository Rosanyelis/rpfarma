<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class Productosd extends Model
{
    use HasFactory, UuidModel;

    protected $table = 'productos_d';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'codigo', 'descripcion', 'precio_venta', 'f5',
    ];
}
