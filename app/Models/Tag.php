<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['title'];

    public function todos()
    {
        return $this->belongsToMany('App\Models\Todo', 'todo_tag', 'tag_id', 'todo_id');
    }
}
