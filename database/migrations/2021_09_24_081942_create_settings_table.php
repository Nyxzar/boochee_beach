<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_image')->nullable();
            $table->string('site_title')->nullable();
            $table->text('site_description')->nullable();

            $table->string('welcome_title')->nullable();
            $table->string('welcome_sub_title')->nullable();
            $table->text('welcome_description')->nullable();

            $table->string('reserve_url_fb')->nullable();
            $table->string('reserve_url_extra1')->nullable();
            $table->string('reserve_url_extra2')->nullable();
            
            $table->text('booked_text')->nullable();
            $table->text('booked_button_text')->nullable();
            $table->text('booked_button_url')->nullable();

            $table->text('social_fb')->nullable();
            $table->text('social_insta')->nullable();
            $table->text('social_extra1')->nullable();
            $table->text('social_extra2')->nullable();

            $table->string('footer_logo')->nullable();
            $table->string('footer_visit')->nullable();
            $table->string('footer_write')->nullable();
            $table->string('footer_call')->nullable();

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
        Schema::dropIfExists('settings');
    }
}
