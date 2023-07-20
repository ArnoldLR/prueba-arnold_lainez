<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nombre', 'apellido', 'correo', 'telefono', 'direccion', 'id_municipio', 'id_depto'];
    
    protected $appends = ['municipio', 'departamento'];

    public function departamento(){
        return $this->belongsTo('App\Models\Catalogo', 'id_depto');
    }

    public function municipio(){
        return $this->belongsTo('App\Models\Catalogo', 'id_municipio');
    }

    public function getMunicipioAttribute(){
        return $this->municipio()->pluck('valor')->first();
    }

    public function getDepartamentoAttribute(){
        return $this->departamento()->pluck('valor')->first();
    }

    
}
