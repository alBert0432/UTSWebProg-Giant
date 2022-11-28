<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publishers extends Model
{
    use HasFactory;

    protected $table = "publishers";
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(books::class);
    }
}
