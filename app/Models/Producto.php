<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = "productos";
    //aca se define los campos a llenar
    //protected $fillable = ['codigo','descripcion','detalle','precio'];
    //aca se define los campos a no llenar
    protected $guarded = ['id'];

    //sobreescribe la function del model solo para prodcutos
    public function getRouteKeyName()
    {
        return 'slug';
    }



}
