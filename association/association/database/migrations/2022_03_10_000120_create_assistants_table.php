<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('cin');
            $table->string('email')->unique();
            $table->string('phone');
            $table->text('adresse');
            $table->text('note');
            $table->string('metier');
            $table->text('rib');
            $table->string('genre');
            $table->timestamp('date_naissance')->nullable();
            $table->string('nationalite');
            $table->string('ville');
            $table->text('affiche_in_staff');
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
        Schema::dropIfExists('assistants');
    }
}
