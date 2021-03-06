<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;
use MunDocente\Place;

class TypeOfPlace extends Model
{
    protected $table = 'type_of_places';

    public function places()
    {
    	return $this->hasMany('MunDocente\Place');
    }
}
