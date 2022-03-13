<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    protected $fillable = ['placa', 'marca', 'model', 'color', 'ano', 'status'];

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    public function persons()
    {
        return $this->hasMany(Person::class);
    }
}
