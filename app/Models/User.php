<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function books()
    {
        return $this->belongsToMany(Book::class)->withPivot('status')->withTimestamps();
    }

    public function friends()
{
    return $this->belongsToMany(User::class, 'friendships', 'user_id', 'friend_id')
                ->withPivot('accepted')
                ->wherePivot('accepted', true)
                ->orWhere(function($query) {
                    $query->where('friend_id', $this->id)
                          ->where('accepted', true);
                })
                ->distinct();
// return $this->belongsToMany(User::class, 'friendships', 'friend_id', 'user_id')
//                 ->withPivot('accepted')
//                 ->wherePivot('accepted', false)
//                 ->orderBy('pivot_created_at', 'asc');
}


    public function friendRequests()
    {
        // return $this->belongsToMany(User::class, 'friendships', 'friend_id', 'user_id')
        //             ->withPivot('accepted')
        //             ->wherePivot('accepted', false);
                    // ->get();
        return $this->belongsToMany(User::class, 'friendships', 'friend_id', 'user_id')
                    ->withPivot('accepted')
                    ->wherePivot('accepted', false)
                    ->whereNotIn('user_id', function ($query) {
                        $query->select('user_id')
                              ->from('friendships')
                              ->where('friend_id', $this->id)
                              ->where('accepted', true);
                    });
    }
}
