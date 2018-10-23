<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('category');
            $table->text('description');
            $table->decimal('price',7,2);

            $table->integer('id_consultant')->unsigned()->index();
            $table->foreign('id_consultant')->references('id')->on('consultants')->onDelete('cascade');;

            $table->integer('id_address')->unsigned()->index();
            $table->foreign('id_address')->references('id')->on('addresses')->onDelete('cascade');;

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
        Schema::dropIfExists('curso');
    }
}
