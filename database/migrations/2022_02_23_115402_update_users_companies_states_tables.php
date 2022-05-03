<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersCompaniesStatesTables extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('companies', function (Blueprint $table) {
      $table->dropColumn('country');
      $table->foreignId("country_id")->constrained("countries")->onDelete("cascade");
    });
    Schema::table('users', function (Blueprint $table) {
      $table->dropColumn('country');
      $table->foreignId("country_id")->constrained("countries")->onDelete("cascade");
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
