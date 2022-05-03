<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCustomRequestsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    Schema::dropIfExists('requests');
    // DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    // if (Schema::hasTable('states')) return;
    // if (Schema::hasTable('requests')) return;
    // return ;
    Schema::create('requests', function (Blueprint $table) {
      $table->id();
      $table->string("title");
      $table->string("type");
      // $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
      $table->morphs('requestable');
      $table->dateTime("date1");
      $table->dateTime("date2");
      $table->string("weight_min");
      $table->string("weight_max");
      $table->string("cubm_min");
      $table->string("cubm_max");
      $table->string("budget_min");
      $table->string("budget_max");
      $table->string("cargo_type");
      $table->string("car_body");
      $table->string("note");
      $table->string("source");
      $table->string("destination");

      // $table->foreignId("source")->constrained("states")->onDelete("cascade");
      // $table->foreignId("destination")->constrained("states")->onDelete("cascade");
      $table->string("status");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    Schema::dropIfExists('requests');
    DB::statement('SET FOREIGN_KEY_CHECKS = 1');
  }
}
