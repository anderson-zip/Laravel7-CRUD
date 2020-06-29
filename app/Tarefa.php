<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    //Caso esses campos estivessem diferentes do padrao
    /*
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType ='int';
    */
    protected $table = 'tarefa';
    public $timestamps= false;
    protected $fillable = ['titulo'];

   /*
    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_updated';
   */

}
