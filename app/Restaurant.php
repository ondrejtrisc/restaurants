<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Restaurant extends Model
{
    protected $fillable = ['user_id', 'name', 'city', 'description'];

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

