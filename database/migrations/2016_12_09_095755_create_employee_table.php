<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string("first_name");
            $table->string("middle_name");
            $table->string("last_name");
            $table->integer("pension_fund_id");
            $table->integer("institution_id");
            $table->string("pension_identification_number");
            $table->string("gender");
            $table->date("date_of_birth");
            $table->integer("salary");
            $table->string("employee_type");
            $table->date("date_of_retirement");
            $table->string("email");
            $table->string("phone_number");
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
        Schema::dropIfExists('employee');
    }
}
