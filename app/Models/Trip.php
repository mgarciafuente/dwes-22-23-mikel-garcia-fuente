<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'origen',
        'destino',
        'plazas',
        'fecha',
        'phone',
    ];

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }

    public function driver() {
        return $this->belongsTo('App\Models\Driver');
    }
}
