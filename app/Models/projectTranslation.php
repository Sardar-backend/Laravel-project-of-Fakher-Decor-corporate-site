<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;  // اگر جدول ترجمه‌ها به زمان‌بندی نیاز ندارد
    protected $fillable = [
        'name',
        'area',
        'infrastructure',
        'FinancialValue',
        'location',
        'engineer',
        'EngineerSpecialty',
        'EngineerPhoto',
        'about',
        'start_date',
        'image',
    ];
}
