<?php

use App\Models\Order;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
   public function up(): void
   {
      Schema::create('order_items', function(Blueprint $table){
         $table->id();
         $table->foreignIdFor(Order::class)->constrained()->cascadeOnDelete();
         $table->string('name');
         $table->unsignedBigInteger('price');
         $table->timestamps();
      });
   }

   public function down(): void
   {
      Schema::dropIfExists('order_items');
   }
};