<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();

            $table->string('website_default_language',100)->nullable();

            $table->string('website_name_ar',100)->nullable();
            $table->string('website_name_en',100)->nullable();
            $table->string('website_name_tr',100)->nullable();
            $table->string('website_name_et',100)->nullable();
            $table->string('website_name_er',100)->nullable();

            $table->text('website_description_ar')->nullable();
            $table->text('website_description_en')->nullable();
            $table->text('website_description_tr')->nullable();
            $table->text('website_description_et')->nullable();
            $table->text('website_description_er')->nullable();

            $table->text('website_keywords_ar')->nullable();
            $table->text('website_keywords_en')->nullable();
            $table->text('website_keywords_tr')->nullable();
            $table->text('website_keywords_et')->nullable();
            $table->text('website_keywords_er')->nullable();

            $table->text('website_logo_ar')->nullable();
            $table->text('website_logo_en')->nullable();
            $table->text('website_logo_tr')->nullable();
            $table->text('website_logo_et')->nullable();
            $table->text('website_logo_er')->nullable();

            $table->text('social_facebook')->nullable();
            $table->text('social_instagram')->nullable();
            $table->text('social_linkedin')->nullable();
            $table->text('social_pinterest')->nullable();
            $table->text('social_twitter')->nullable();


            $table->bigInteger('provider_contract_ar')->nullable();
            $table->bigInteger('provider_contract_en')->nullable();
            $table->bigInteger('provider_contract_tr')->nullable();
            $table->bigInteger('provider_contract_et')->nullable();
            $table->bigInteger('provider_contract_er')->nullable();

            $table->bigInteger('customer_contract_ar')->nullable();
            $table->bigInteger('customer_contract_en')->nullable();
            $table->bigInteger('customer_contract_tr')->nullable();
            $table->bigInteger('customer_contract_et')->nullable();
            $table->bigInteger('customer_contract_er')->nullable();

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
        Schema::dropIfExists('website_settings');
    }
}
