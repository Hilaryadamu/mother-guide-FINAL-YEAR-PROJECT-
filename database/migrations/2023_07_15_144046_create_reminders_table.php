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
        Schema::create('reminder', function (Blueprint $table) {
            $table->id();
                
           $table->string('phone_number');
           $table->text('message');
           $table->date('reminder_date');
           $table->time('reminder_time');
           $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reminder');
    }
};
