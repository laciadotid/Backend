<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $primaryKey = 'id';
    // protected $fillable = ['title', 'description'];
    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class,'post_category');
    }

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class,'post_author');
    }


}
