<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='products';
    protected $fillable=array('name','quantity','price', 'color', 'size','category');
}
