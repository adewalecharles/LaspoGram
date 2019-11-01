<?php

namespace LaspoGram;

use Illuminate\Database\Eloquent\Model;
use LaspoGram\Presenters\DatePresenter;
class Comment extends Model
{
//   use DatePresenter;
 
  // fields can be filled
  protected $fillable = ['body', 'user_id', 'post_id'];
 
  public function post()
  {
    return $this->belongsTo('LaspoGram\Post');
  }
 
  public function user()
  {
    return $this->belongsTo('LaspoGram\User');
  }
}