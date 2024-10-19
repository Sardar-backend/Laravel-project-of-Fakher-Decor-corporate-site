<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class blogcategory extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $table = 'blogcategorys';
    protected $fillable =['name','parent'];
    public $translatedAttributes = ['name']; // فیلدهایی که قابل ترجمه هستند
    public function child(){
        return $this->hasMany(blogcategory::class,'parent', 'id');
    }
}
