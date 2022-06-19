<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTechniquesNullable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    
    if (Schema::hasColumns('techniques',['price', 'description', 'owner'])) {
    Schema::table('techniques', function (Blueprint $table) {
      $table->dropColumn('price');
      $table->dropColumn('description');
      $table->dropColumn('owner');
    });
    }
    Schema::table('techniques', function (Blueprint $table) {
      $table->string('price')->nullable();
      $table->string('description')->nullable();
      $table->string('owner')->nullable();
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
