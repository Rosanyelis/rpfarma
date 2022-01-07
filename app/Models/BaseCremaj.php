<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class BaseCremaj extends Model
{
    use HasFactory, UuidModel;

    
    protected $table = 'base_crema_j';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nombre', 'precio_base',
    ];
}
