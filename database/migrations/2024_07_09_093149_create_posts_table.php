<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Додавання зовнішнього ключа user_id, який посилається на поле id таблиці users
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('title');
            $table->text('content');

            $table->boolean('published')->default(true);
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
