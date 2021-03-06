<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = "article";

    public function category()
    {
        return $this->hasOne(Category::class,"article_id");
    }
}
