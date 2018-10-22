<?php

namespace App;
Use App\Address as Address;
Use App\Consultant as Consultant;


use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'Cursos';

    public function Address()
    {
        return $this->hasOne('Address', 'id', 'id_address');
    }
    public function Consultant()
    {
        return $this->hasOne('Consultant', 'id', 'id_consultant');
    }
}
