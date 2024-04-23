<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [ 'category_id', 'photo', 'title', 'text'];
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function likes() {
        return $this->hasMany(Like::class);
    }
}
