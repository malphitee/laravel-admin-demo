<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $table = 'tags';

    protected $fillable = ['name','post_id','sort'];

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }
}
