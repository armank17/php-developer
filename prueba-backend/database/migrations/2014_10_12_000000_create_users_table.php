<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('isOnline');
            $table->decimal('salary', 8, 2);
            $table->integer('age');
            $table->string('position');
            
            $table->string('name');
            $table->boolean('gender');
            
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
             
            $table->string('password');
            $table->longText('skills');
            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
