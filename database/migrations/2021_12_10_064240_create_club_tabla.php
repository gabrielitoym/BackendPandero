<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club', function (Blueprint $table) {
            $table->id();
            $table->char('id_sala', 8);
            $table->string('name',100);
            $table->integer('max_members');
            $table->float('cuota', 8, 2);
            $table->float('final_mount', 10, 2);
            $table->string('interval_cuota',20);
            $table->string('interval_rafle',20);
            $table->timeTz('start_date', 0);
            $table->boolean('activo');
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
        Schema::dropIfExists('club');
    }
}
