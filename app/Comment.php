<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Restaurant;

class Comment extends Model
{
    protected $fillable = ['user_id', 'restaurant_id', 'text'];
    
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
