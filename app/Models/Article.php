<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title', 'contents', 'author_id'];
    public $timestamps = TRUE;

    public function author()
    {
        return $this->belongsTo('App\Models\User', 'author_id', 'id');
    }
}