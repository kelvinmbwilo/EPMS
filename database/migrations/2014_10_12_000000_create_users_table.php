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
            $table->string("fname");
            $table->string("mname");
            $table->string("lname");
            $table->string("gender");
            $table->string("user_name");
            $table->string("email")->unique();
            $table->string("password");
            $table->string("phone_number");
            $table->date("last_login");
            $table->string("church");
            $table->string("user_role_id");
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
        Schema::drop('users');
    }
}
