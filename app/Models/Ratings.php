<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;
    public function book()

    {

        return $this->belongsTo(Books::class, 'id');

    }

    public function author()
    {
        return $this->belongsTo(Authors::class, 'id_author', 'author_id');
    }

    public function books() {
        return $this->belongsTo(Books::class, 'id', 'book_id');
    }

}
