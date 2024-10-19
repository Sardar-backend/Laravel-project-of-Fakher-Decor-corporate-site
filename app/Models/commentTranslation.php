<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;  // اگر جدول ترجمه‌ها به زمان‌بندی نیاز ندارد
    protected $fillable = ['content'];  // فیلدهایی که قابل ترجمه هستند
}
