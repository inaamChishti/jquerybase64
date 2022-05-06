<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
    
    public function images()

    {

        return $this->hasMany(Image::class);

    }

    public function timings()

    {

        return $this->hasMany(Timing::class);

    }
}
