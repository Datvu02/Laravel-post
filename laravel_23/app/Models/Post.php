<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    // protected $timestamps = true;

    protected   $statusArr = [
         0 => 'Draft',
         1 => 'Public'
    ];

    public function FunctionName(Type $var = null)
    {
        return $this->statusArr[$this->status];
    }
}
