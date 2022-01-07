<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{           // ユーザーが入力できる値のカラムを指定
    protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
