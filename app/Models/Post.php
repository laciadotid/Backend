<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $primaryKey = 'id';
    // protected $fillable = ['title', 'description'];


    protected $fillable = ['title', 'slug'];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->slug = Str::slug($model->title, '-');
        });
    }




    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class,'post_category');
    }

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class,'post_author');
    }


}
