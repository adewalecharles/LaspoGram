<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Post extends Model
{

  use Searchable;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

public function comments()
{
  return $this->hasMany('App\Comment');
}
}