<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'title', 'description', 'completed',
    ];

    protected $with = ['tags'];

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'todo_tag', 'todo_id', 'tag_id');
    }
}
