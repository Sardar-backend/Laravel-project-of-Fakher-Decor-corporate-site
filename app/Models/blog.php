<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class blog extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $fillable = [
        'title',
        'content',
        'image',
        'count_view'
    ];

    protected $translatedAttributes = [
        'title',
        'content',
    ];

    public function categories(){
        return $this->belongsToMany(blogcategory::class,'blogcategorys_blog');
    }
}
