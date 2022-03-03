<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('images', function (Blueprint $table) {
      $table->id();
      $table->string('type');
      $table->integer('owner_id')->unsigned()->nullable();
      // $table->foreignIdFor([ User::class, ]);
      if (Schema::hasColumn('images', 'type') == 'user'){
        $table->foreignId("owner_id")->constrained("users")->onDelete("cascade");
      } elseif (Schema::hasColumn('images', 'type') == 'company'){
        $table->foreignId("owner_id")->constrained("companies")->onDelete("cascade");
      } elseif (Schema::hasColumn('images', 'type') == 'technique'){
        $table->foreignId("owner_id")->constrained("techniques")->onDelete("cascade");
      }
      $table->string("url");
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
    Schema::dropIfExists('images');
  }
}
