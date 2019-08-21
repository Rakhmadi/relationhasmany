<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorys_model extends Model
{
    protected $table='category';
    protected $fillable=[
        'categorys'
    ];
    public function artic(){
        return $this->hasMany('App/article_model','cat');
    }
}
