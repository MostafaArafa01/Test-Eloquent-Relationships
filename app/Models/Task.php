<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'users_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id')->withDefault();
    }
    public function comments()
    {
        // TASK: add the code here for two-level relationship
        return $this->hasMany(Comment::class);
    }
}
