<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });


        Schema::create('project_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onDelete('cascade'); // ارتباط با جدول اصلی پروژه
            $table->string('locale')->index();  // زبان ترجمه

            // فیلدهای قابل ترجمه
            $table->string('name');
            $table->string('area');
            $table->string('infrastructure');
            $table->string('FinancialValue');
            $table->string('location');
            $table->string('engineer');
            $table->string('EngineerSpecialty');
            $table->longText('about');

            // ایجاد یونیک برای جلوگیری از ترجمه تکراری برای یک زبان
            $table->unique(['project_id', 'locale']);

            $table->timestamps();
        });



        Schema::create('blog_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained()->onDelete('cascade'); // ارتباط با جدول اصلی مقاله‌ها
            $table->string('locale')->index();  // زبان ترجمه
            $table->string('title');  // عنوان ترجمه شده
            $table->longText('content');  // محتوای ترجمه شده
            $table->unique(['blog_id', 'locale']);  // ایجاد یکتایی برای هر ترجمه در هر زبان
            $table->timestamps();  // برای created_at و updated_at
        });

        Schema::create('blogcategory_translations', function (Blueprint $table) {
            $table->id(); // شناسه اصلی جدول ترجمه‌ها
            $table->foreignId('blogcategory_id')->references('id')->on('blogcategorys')->onDelete('cascade'); // مرجع به دسته‌بندی اصلی
            $table->string('locale')->index(); // زبان ترجمه (مثل 'en'، 'fa' و غیره)
            $table->string('name'); // فیلد ترجمه‌شده برای نام دسته‌بندی
            $table->unique(['blogcategory_id', 'locale']); // تضمین یکتا بودن ترکیب دسته‌بندی و زبان
            $table->timestamps(); // فیلدهای created_at و updated_at
        });



        Schema::create('comment_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comment_id')->constrained()->onDelete('cascade'); // کلید خارجی به جدول اصلی comments
            $table->string('locale')->index(); // زبان ترجمه
            $table->longText('content'); // فیلد ترجمه‌شده
            $table->unique(['comment_id', 'locale']); // هر نظر یک ترجمه برای هر زبان داشته باشد
            $table->timestamps(); // فیلدهای created_at و updated_at
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translations');
        Schema::dropIfExists('project_translations');
        Schema::dropIfExists('blog_translations');
        Schema::dropIfExists('blogcategory_translations');
    }
};
