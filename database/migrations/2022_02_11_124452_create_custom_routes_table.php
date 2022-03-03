<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('routes')) return;
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("company_id")->constrained("companies")->onDelete("cascade");
            $table->dateTime("date1");
            $table->dateTime("date2");
            $table->string("car_body");
            $table->text("note");   
            $table->foreignId("source")->constrained("states")->onDelete("cascade");
            $table->foreignId("destination")->constrained("states")->onDelete("cascade");
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
        Schema::dropIfExists('custom_routes');
    }
}
