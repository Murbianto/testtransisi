<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('employees_id');
            $table->integer('companies_id')->unsigned()->nullable();
            $table->string('employees_name');
            $table->string('employees_email');
            $table->timestamps();
        });
        Schema::table('employees', function ($table) {
            $table->foreign('companies_id')->references('companies_id')->on('companies')->onDelete('restrict')->onUpdate('cascade');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
