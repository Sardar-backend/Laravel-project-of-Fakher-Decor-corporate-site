<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class comment extends Model implements TranslatableContract
{
    public $timestamps = false;
    use Translatable;

    protected $fillable = ['id','status','content', 'user_id' , 'parent_id' ];

    public $translatedAttributes = ['content'];
    public function user(){
        return $this->belongsTo(User::class);
    }



    public function child (){
        return $this->hasMany(comment::class,'parent_id','id');
    }

    use HasFactory;
}
