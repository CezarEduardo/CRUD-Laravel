<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{

    protected $table='model_books';
    protected $fillable=['title','id_user','pages','price'];

    public function relUsers()
    {
        return $this->hasOne(related: 'App\Models\User',foreignKey:'id', localKey:'id_user');
    }
}
