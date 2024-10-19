<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;  // اگر جدول ترجمه‌ها به زمان‌بندی نیاز ندارد

    protected $fillable = [
        'article_id',
        'locale',
        'title',
        'content'
    ];
}
