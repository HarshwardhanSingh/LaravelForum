<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title','content','user_id'];

    protected $table = 'questions';

    public static $create_validation_rules = [
      'title'=>'required',
      'content'=>'required'
    ];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function answers()
    {
      return $this->hasMany('App\Answer');
    }
}
