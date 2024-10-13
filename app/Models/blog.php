<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable =[
        'count_view'
    ];


    public function categories(){
        return $this->belongsToMany(blogcategory::class,'blogcategorys_blog');
    }
}
