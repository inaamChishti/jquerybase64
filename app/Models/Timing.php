<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timing extends Model
{
    use HasFactory;
     protected $fillable = [
        'day',
        'closing_time',
        'opening_time',
        'crud_id'
    ];
    public function cruds()

    {

        return $this->belongsTo(Crud::class);

    }

}
     