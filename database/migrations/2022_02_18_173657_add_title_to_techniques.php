<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleToTechniques extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (Schema::hasColumn('techniques', 'title')) return;
    Schema::table('techniques', function (Blueprint $table) {
      $table->string("title")->after("state_id");
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
      return ;
    });
  }
}
