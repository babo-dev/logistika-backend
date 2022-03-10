<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AcceptedToTechniques extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (Schema::hasColumn("techniques", "accepted")) return;
    Schema::table('techniques', function (Blueprint $table) {
      $table->boolean('accepted')->default(false);
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
