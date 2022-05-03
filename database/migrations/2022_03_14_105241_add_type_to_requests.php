<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeToRequests extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (Schema::hasColumn('requests', 'type')) return;
    Schema::table('requests', function (Blueprint $table) {
      $table->string("type")->after("id");
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    // Schema::table('requests', function (Blueprint $table) {
    //   if (Schema::dropColumns('requests', ['type'])) return;
    // });
  }
}
