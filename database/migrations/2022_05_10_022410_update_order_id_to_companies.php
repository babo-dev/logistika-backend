<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrderIdToCompanies extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (Schema::hasColumn('companies', 'order_id')) {
      Schema::table('companies', function (Blueprint $table) {
        $table->dropColumn('order_id');
      });
    }
    Schema::table('companies', function (Blueprint $table) {
      $table->integer('order_id')->nullable();
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
