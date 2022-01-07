<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Traits\UuidModel;

class RolOperacion extends Pivot
{
    use HasFactory, UuidModel;

    protected $table = 'rol_operacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rol_id', 'operacion_id'
    ];
}
