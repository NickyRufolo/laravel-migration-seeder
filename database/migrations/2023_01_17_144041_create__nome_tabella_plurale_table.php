<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomeTabellaPluraleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_nome_tabella_plurale', function (Blueprint $table) {
            $table->id();
            $table->string('color', 100);
            $table->string('date', 20);
            $table->string('wagons', 10);
            $table->smallInteger('racing')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('_nome_tabella_plurale');
    }
}
