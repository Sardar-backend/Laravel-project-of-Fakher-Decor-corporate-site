<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogcategoryTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;  // اگر جدول ترجمه‌ها به زمان‌بندی نیاز ندارد
    protected $fillable = ['name'];  // فیلدهایی که قابل ترجمه هستند
}
