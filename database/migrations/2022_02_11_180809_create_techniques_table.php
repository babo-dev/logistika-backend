<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechniquesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (Schema::hasTable('techniques')) return;
    Schema::create('techniques', function (Blueprint $table) {
      $table->id();
      $table->foreignId("technique_type_id")->constrained("technique_types")->onDelete("cascade");
      $table->foreignId("company_id")->constrained("companies")->onDelete("cascade");
      $table->foreignId("state_id")->constrained("states")->onDelete("cascade");
      $table->string('price');
      $table->string('description');
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
    Schema::dropIfExists('techniques');
  }
}
