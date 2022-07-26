<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'stock_precio';

    public function producto(){
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function sucursal(){
        return $this->belongsTo(Sucursal::class, 'sucursal_id');
    }
}



