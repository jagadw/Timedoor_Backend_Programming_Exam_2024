<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'id_author',
        'id_category',
        'id_rating',
        'price',
        'publisher',
        'released_date'
    ];

    public function author()
    {
        return $this->belongsTo(Authors::class, 'id_author', 'author_id');
    }

    public function category() {
        return $this->belongsTo(Categories::class, 'id_category', 'category_id');
    }

    public function ratings()
    {
        return $this->hasMany(Ratings::class, 'id_book', 'id');
    }
}
