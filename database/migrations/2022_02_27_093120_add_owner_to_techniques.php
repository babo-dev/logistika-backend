<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOwnerToTechniques extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (Schema::hasColumn('techniques', 'owner')) return;
    Schema::table('techniques', function (Blueprint $table) {
      $table->string("owner")->after("company_id");
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('techniques', function (Blueprint $table) {
      //
    });
  }
}
