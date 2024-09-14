<?php

use App\Models\Restaurant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
   {
      Schema::create('categories', function (Blueprint $table) {
         $table->id();
         $table->foreignIdFor(Restaurant::class)->constrained()->cascadeOnDelete();
         $table->string('name');
         $table->timestamps();
      });
   }

   public function down(): void
   {
      Schema::dropIfExists('categories');
   }
};