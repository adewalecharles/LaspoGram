<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];   

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/fk35XKtzKDa4MGiy2bGOXCNQVB6wEWNOOiuvMVgU.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
