<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $fillable = ['name','img', 'author_name', 'book_types', 'email','mailing_address', 'city','state_or_province','postalcode','product_description'];
}
