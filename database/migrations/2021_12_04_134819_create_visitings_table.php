<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitings', function (Blueprint $table) {
            $table->id();
            $table->string('reference_no');
            $table->string('first_name');
            $table->string('contact_no');
            $table->string('user_address');
            $table->string('last_name');
            $table->string('contact_home');
            $table->string('near_city');
            $table->string('email');
            $table->string('service_category');
            $table->string('water_level');
            $table->string('site_visit');
            $table->string('site_visit_date')->nullable();
            $table->string('site_visit_fee')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('visitings');
    }
}
