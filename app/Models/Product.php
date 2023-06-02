<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name','price','cat_id'];

    function category(){
        return $this->hasOne(Category::class);
    }
    function owners(){
        return  $this->belongsToMany(Owner::class);
    }
}
