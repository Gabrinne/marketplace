<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{

    protected $fillable = ['name', 'description', 'body', 'price', 'slug'];

    public function store() {
        return  $this->belongsTo(Store::class); //Os produtos pertecem a loja.
    }

    public function categories() {
        return $this->belongsToMany(Category::class); // Os produtos pertecem a muitas categorias.
    }
}
