<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $primaryKey = 'id_product';

    /**
     * Product belongs to one catgorie
     */

     public function categorie(){

        return $this->belongsTo(Categorie::class,'id_categorie');

     }

}
