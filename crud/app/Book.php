<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //atributos
    protected $fillable = ['book_name', 'isbn_no', 'book_price'];
}
