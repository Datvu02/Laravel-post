<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    // protected $timestamps = true;

    protected $statusArr = [
         0 => 'Draft',
         1 => 'Public'
    ];

    public function getStatusTextAttribute()
    {
        return $this->statusArr[$this->status];
    }

    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
