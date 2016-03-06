<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['content','question_id','user_id'];

    protected $table = 'answers';

    public static $create_validation_rules = [
      'content'=>'required'
    ];
    
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function question()
    {
      return $this->belongsTo('App\Question');
    }
}
