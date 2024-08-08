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
        Schema::create('customer_response', function (Blueprint $table) {
            $table->id();
            $table->boolean('will_come');
            $table->string('name');
            $table->string('email')->nullable();
            $table->integer('number_of_guest');
            $table->string('guestOf');
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_response');
    }
};
