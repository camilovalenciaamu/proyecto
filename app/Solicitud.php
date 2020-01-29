<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use Notifiable;
    protected $fillable = [
        'comuna','barrio', 'manzana','idmanzana','estado','comentario'
    ];
}
