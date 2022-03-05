<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleToRequests extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (Schema::hasColumn('requests', 'title')) return;
    Schema::table('requests', function (Blueprint $table) {
      $table->string("title")->after("id");
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('requests', function (Blueprint $table) {
      //
    });
  }
}
