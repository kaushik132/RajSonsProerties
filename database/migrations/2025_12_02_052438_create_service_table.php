<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id')->nullable();
            $table->integer('service_sub_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('location')->nullable();
            $table->string('beds_number')->nullable();
            $table->string('baths_number')->nullable();
            $table->string('size_of_area')->nullable();
            $table->string('price')->nullable();
            $table->string('star')->nullable();
            $table->text('description')->nullable();
            $table->string('thumb_image')->nullable();
            $table->longText('gallery')->nullable();
            $table->longText('itinerary')->nullable();
            $table->string('property_type')->nullable();
            $table->string('area')->nullable();
            $table->string('furnishing')->nullable();
            $table->string('parking')->nullable();
            $table->text('location_map')->nullable();
            $table->text('question')->nullable();
            $table->text('answer')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keyword')->nullable();
            $table->integer('status')->default('1')->nullable();
            $table->integer('for_sale')->nullable();
            $table->string('agent_number')->nullable();
            $table->string('agent_email')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('varify_agent_year')->nullable();
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
        Schema::dropIfExists('service');
    }
}
