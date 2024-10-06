<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_title',
        'user_id',
        'description',
        'job_poster',
        'requirments',
        'likes',
        'pinned',
    ];
    public function comments(){
        return $this->hasMany(Comment::class,'job_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
