<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSourceAndDestionation extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    // Schema::table('requests', function (Blueprint $table) {
    //   $table->string("source");
    //   $table->string("destination");
    // });
    Schema::table('routes', function (Blueprint $table) {
      $table->string("source");
      $table->string("destination");
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    //
  }
}
