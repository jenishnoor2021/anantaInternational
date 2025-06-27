<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $uploads = '/productimg/';
    public function getFileAttribute($photo)
    {

        return $this->uploads . $photo;
    }

    public function Categories()
    {
        return $this->belongsTo(Category::class);
    }
}
