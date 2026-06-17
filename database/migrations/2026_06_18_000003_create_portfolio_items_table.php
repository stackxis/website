<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolio_items', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_featured')->default(false);
            $table->json('categories')->nullable();
            $table->string('label')->nullable();
            $table->string('headline')->nullable();
            $table->string('title')->nullable();
            $table->string('industry')->nullable();
            $table->string('deployment_type')->nullable();
            $table->string('year', 4)->nullable();
            $table->string('metric')->nullable();
            $table->text('summary');
            $table->json('stack');
            $table->string('url')->nullable();
            $table->boolean('is_published')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolio_items');
    }
};
