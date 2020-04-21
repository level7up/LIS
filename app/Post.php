<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name',
        'contact_number',
        'item',
        'description',
        'location',
        'date',
        'image',
        'category_id',
        'status',
      ];
}
