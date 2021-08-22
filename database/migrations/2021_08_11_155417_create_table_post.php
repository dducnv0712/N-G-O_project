<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePost extends Migration
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
            $table->string('image');
            $table->unsignedBigInteger("author");
            $table->unsignedBigInteger("approval")->default(1);
            $table->string('title');
            $table->decimal("contribute",14,2)->default(0);
            $table->unsignedInteger('active')->default(1);
            $table->unsignedInteger('important')->default(1);
            $table->unsignedInteger('send_mail')->default(1);
            $table->text("description")->nullable();
            $table->unsignedBigInteger("category_id");
            $table->timestamps();

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
