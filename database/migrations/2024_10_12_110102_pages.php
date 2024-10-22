<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
  /*     Schema::create('pages', function (Blueprint $table) {
        $table->id();
        $table->json('menu_title');
        $table->string('menu_url')->nullable()->unique();
        $table->integer('order')->default(0);
        $table->boolean('isPrimary')->default(0);
        $table->boolean('active')->default(1);
        $table->softDeletes();
        $table->timestamps();
    }); */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
