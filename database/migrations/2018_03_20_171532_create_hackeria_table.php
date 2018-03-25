<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHackeriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackeria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('keypoint');
            $table->string('location');
            $table->string('description');
            $table->timestamp('starts_by')->nullable();
            $table->timestamp('ends_by')->nullable();
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
        Schema::dropIfExists('hackeria');
    }
}
