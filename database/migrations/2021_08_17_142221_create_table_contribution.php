<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableContribution extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributions', function (Blueprint $table) {
            $table->id();
            $table->char('id_cus');
            $table->string('full_name');
            $table->string('email');
            $table->text("messages")->nullable();
            $table->decimal("contribute_amount",14,2)->default(0);
            $table->string('country');
            $table->unsignedBigInteger('id_post');
            $table->string('status');
            $table->timestamps();
            $table->foreign("id_post")->references("id")->on("posts")->onDelete('no action')->onUpdate('no action');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contributions');
    }
}
