<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'crud_id',
        
    ];
    public function crud()
    {
    	return $this->belongsTo(Crud::class);
    }
}
