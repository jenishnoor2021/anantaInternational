<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $uploads = '/certificate/';

    public function getFileAttribute($photo)
    {
        return $this->uploads . $photo;
    }
}
