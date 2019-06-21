<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',40);
            $table->string('password',32);
            $table->biginteger('usn');
            $table->string('branch',32);
            $table->string('address',100);
            $table->string('email',32);
            $table->integer('ca');
            $table->integer('tch');
            $table->float('perc');
            $table->timestamps();
            $table->integer('mark1')->nullable();
            $table->integer('mark2')->nullable();
            $table->integer('mark3')->nullable();
            $table->integer('mark4')->nullable();
            $table->integer('mark5')->nullable();
            $table->integer('mark6')->nullable();
            $table->integer('mtotal')->nullable();
            $table->integer('mperc')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
