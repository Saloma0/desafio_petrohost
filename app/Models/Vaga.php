<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'id_category','id');
     }

}
