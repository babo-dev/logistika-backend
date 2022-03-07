<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCarNumberToCompanies extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (Schema::hasColumn('companies', 'car_number')) return;
    Schema::table('companies', function (Blueprint $table) {
      $table->string("car_number")->nullable()->after("type");
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('companies', function (Blueprint $table) {
      //
    });
  }
}
