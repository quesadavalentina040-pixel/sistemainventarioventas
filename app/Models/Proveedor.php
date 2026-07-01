<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proveedor extends Model
{
    use HasFactory;

    // Indicamos explícitamente el nombre de la tabla
    protected $table = 'proveedores';

    // Permitimos la asignación masiva de estos campos
    protected $fillable = [
        'nombre',
        'nit_documento',
        'telefono',
        'email',
        'direccion',
        'contacto',
        'estado',
    ];
}
