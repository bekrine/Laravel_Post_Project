<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'body'
    ];

    public function likedby(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}
