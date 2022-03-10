<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AcceptedToCompanies extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (Schema::hasColumn("companies", "accepted")) return;
    Schema::table('companies', function (Blueprint $table) {
      $table->boolean('accepted')->default(false)->after('owner');
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
