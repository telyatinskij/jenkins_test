<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  //use HasFactory;
    //table
  //protected $table = 'posts';
  //PK
  //protected $primaryKey = 'id';
  //timestamps
  //public $timestamps = false;

  public function user(){
    return $this->belongsTo('App\Models\User');
  }
}
