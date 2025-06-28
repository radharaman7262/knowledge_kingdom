<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bussiness_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('favicon');
            $table->string('logo');
            $table->string('email_1');
            $table->string('email_2');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->string('address');
            $table->string('map');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bussiness_settings');
    }
};
