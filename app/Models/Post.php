<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['photo', 'title', 'text'];
    public function comments() {
        return $this->hasMany(Comment::class);
    }

}
