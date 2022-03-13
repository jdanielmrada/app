<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = ['cedula', 'apellido', 'nombre', 'telefono', 'status'];

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }
}
