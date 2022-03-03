<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestAnswersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('request_answers', function (Blueprint $table) {
      $table->id();
      $table->foreignId("company_id")->constrained("companies")->onDelete("cascade");
      $table->foreignId("request_id")->constrained("requests")->onDelete("cascade");
      $table->string("price");
      $table->string("note");
      $table->integer("status");
      $table->string("status_note")->nullable();
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
    Schema::dropIfExists('request_answers');
  }
}
