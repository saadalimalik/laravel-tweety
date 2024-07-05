<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

trait Likeable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'SELECT tweet_id, SUM(liked) likes, SUM(!liked) dislikes FROM likes GROUP BY tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function isLikedBy(User $user, $liked = true)
    {
        return (bool)$user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', $liked)->count();
    }

    public function isDislikedBy(User $user)
    {
        return $this->isLikedBy($user, false);
    }

    public function like($user = null, $liked = true)
    {
        return $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id()
        ], [
            'liked' => $liked
        ]);
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }
}
