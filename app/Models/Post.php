<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Post extends Model
{
    use HasFactory;
    // inverse relationship
    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
