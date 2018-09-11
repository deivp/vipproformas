<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ad extends Model
{
    protected $fillable = [
        'user_id', 'category', 'subcategory','title','description','price','imagen_1','imagen_2','imagen_3',
    ];
}
