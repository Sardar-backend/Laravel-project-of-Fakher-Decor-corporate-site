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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('count_view')->default(0);
            $table->longText('content');
            $table->string('image');
            $table->timestamps();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('area');
            $table->string('infrastructure');
            $table->string('FinancialValue');
            $table->string('location');
            $table->string('engineer');
            $table->string('EngineerSpecialty');
            $table->string('EngineerPhoto');
            $table->longText('about');
            $table->dateTime('start_date');
            $table->string('image');
            $table->timestamps();
        });


        Schema::create('gallery', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->string('image');
            $table->string('alt')->nullable();
            $table->timestamps();
        });


        Schema::create('comments', function (Blueprint $table) {
            $table->id()->primary();
            $table->boolean('status')->default(0);
            $table->longText('content');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('parent_id')->default(0);
            $table->unsignedBigInteger('commenttable_id');
            $table->string('commenttable_type');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('failed_at')->useCurrent();
        });

        Schema::create('blogCategorys', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->unsignedBigInteger('parent');
            $table->timestamps();
        });

        Schema::create('blogCategorys_blog', function (Blueprint $table) {

            $table->unsignedBigInteger('blogCategory_id');
            $table->foreign('blogCategory_id')->references('id')->on('blogCategorys')->onDelete('cascade');
            $table->unsignedBigInteger('blog_id');
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->primary(['blogCategory_id','blog_id']);



        });
        Schema::create('contacts', function (Blueprint $table) {
            $table->id()->primary();
            $table->longText('content');
            $table->char('email');
            $table->char('subject');
            $table->timestamp('failed_at')->useCurrent();
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
