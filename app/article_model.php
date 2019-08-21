<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article_model extends Model
{
    protected $table='article';
    protected $fillable=[
        'title',
        'cat'
    ];
    public function cate(){
        return $this->belongsTo('App/categorys_model','id');
    }
}
