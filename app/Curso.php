<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    protected $dates = ['created_at', 'updated_at', 'start','finish'];

    public function Address()
    {
        return $this->hasOne('App\Address', 'id', 'id_address');
    }
    public function Consultant()
    {
        return $this->hasOne('App\Consultant', 'id', 'id_consultant');
    }
}
