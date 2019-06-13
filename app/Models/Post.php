<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    /**
     * 关联数据表
     */
    protected $table = 'posts';

    /**
     * 可以被批量赋值的属性
     */
    protected $fillable = ['title','content','html','category_id','tag_id','visibility'];

    /**
     * 获取当前文章的标签
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    /**
     * 获取当前文章的分类
     */
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
