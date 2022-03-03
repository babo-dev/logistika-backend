<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        if(Schema::hasTable('requests')) return;
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
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
            $table->foreignId("company_id")->nullable()->constrained()->onDelete("cascade");    
            $table->string("note");   
            $table->foreignId("source")->constrained("states")->onDelete("cascade");
            $table->foreignId("destination")->constrained("states")->onDelete("cascade");
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
        Schema::dropIfExists('custom_requests');
    }
}
