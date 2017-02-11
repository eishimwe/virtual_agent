<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class Property extends Model
{
    protected $table = "properties";

    // DEFINE RELATIONSHIPS
    // Each property has one property type

    public function propType() {

        return $this->hasOne('App\PropertyType','id');
    }




}
