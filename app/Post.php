<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function like(User $user)
    {
        return $this->likes()->create([
            'post_id' => $this->id,
            'user_id' => $user->id
        ]);
    }

    public function isLiked(User $user)
    {
        return (bool) $user->likes->where('post_id', $this->id)->count();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
