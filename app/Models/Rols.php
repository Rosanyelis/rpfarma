<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class Rols extends Model
{
    use HasFactory, UuidModel;

    protected $table = 'rols';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'descripcion', 
    ];

    /**
     * Obtiene los usuarios que poseen un rol.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
