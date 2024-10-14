<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogcategory extends Model
{
    use HasFactory;
    protected $table = 'blogcategorys';
    protected $fillable =['name','parent'];

    public function child(){
        return $this->hasMany(blogcategory::class,'parent', 'id');
    }
}
