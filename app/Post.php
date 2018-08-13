<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array('id','updated_at','created_at');
	protected $fillable = ['id', 'name', 'slug', 'content'];
}
