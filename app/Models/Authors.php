<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory;

    public function books()

    {

        return $this->hasMany(Books::class, 'id_author', 'author_id');

    }

    public function ratings()

    {

        return $this->hasMany(Ratings::class, 'id_author', 'author_id');

    }

}
