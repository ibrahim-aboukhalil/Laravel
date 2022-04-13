<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id']; // allow all value except this
    protected $fillable = ['title', 'excerpt', 'body']; // allow value

    /*used to determine what attridute you want to use for routing*/
//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }
}
