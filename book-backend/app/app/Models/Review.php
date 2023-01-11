<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'review',
        'user_id',
        'parent_id',
        'book_id',
        'rate',
    ];


    public function book(){
        return $this->belongsTo(Book::class);
    }

}
