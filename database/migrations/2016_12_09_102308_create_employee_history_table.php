<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_history', function (Blueprint $table) {
            $table->increments('id');
            $table->date("date_of_action");
            $table->integer("employee_id");
            $table->integer("new_salary");
            $table->integer("old_salary");
            $table->date("new_retirement_date");
            $table->date("old_retirement_date");
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
        Schema::dropIfExists('employee_history');
    }
}
