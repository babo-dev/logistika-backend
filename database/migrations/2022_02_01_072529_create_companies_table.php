<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->text("email");
            $table->string('password');
            $table->string('phone');
            $table->string('country');
            $table->string("type")->nullable();
            $table->text("status")->nullable();
            $table->text("short_description")->nullable();
            $table->text("description")->nullable();
            $table->string("avatar")->nullable();
            $table->string("auto_model")->nullable();
            $table->string("car_year")->nullable();
            $table->string("owner")->nullable();
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
        Schema::dropIfExists('companies');
    }
}
