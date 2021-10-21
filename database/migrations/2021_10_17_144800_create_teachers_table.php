<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->String('image')->nullable();
//            $table->String('fnamek');
            $table->String('lnamek');
            $table->String('funamek');
            $table->String('nameE');
            $table->String('dname');
            $table->String('gender');
            $table->String('email')->unique();
            $table->text('phone');
            $table->date('db');
            $table->String('role')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
