<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id']; // allow all value except this
    protected $fillable = ['title', 'excerpt', 'body']; // allow value
    protected $with = ['category','author'];

    /*used to determine what attridute you want to use for routing*/
//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function ($query,$search){
            $query
                ->where('title','like','%'.$search.'%')
                ->orwhere('body','like','%'.$search.'%');
        });
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
