<?php

namespace App\Models;
use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','img','pdf','author','type','number','size','documentId'];
    

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    public function averageRating()
    {
        return $this->reviews()->avg('rating');
    }

}


