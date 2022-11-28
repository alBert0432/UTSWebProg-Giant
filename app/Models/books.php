<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;

    protected $table = "book";
    protected $guarded = [];

    public function comments()
    {
        return $this->hasOne(publishers::class);
        return $this->hasMany(book_category::class);
    }
}
