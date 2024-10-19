<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Carbon\Carbon;

class project extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $fillable = ['about'];
    public $translatedAttributes = ['name', 'area', 'infrastructure', 'FinancialValue', 'location', 'engineer', 'EngineerSpecialty', 'about'];
    public function gallery(){
        return $this->hasMany('App\Models\Gallery');
    }
}

