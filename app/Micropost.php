<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id', 'micropost_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

// 以下、お気に入りに関して
    public function favorite_users()
    {
        return $this->belongsToMany(Micropost::class, 'favorites', 'micropost_id', 'user_id')->withTimestamps();
    }




}