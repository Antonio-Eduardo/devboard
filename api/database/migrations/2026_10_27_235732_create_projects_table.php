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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index()->constrained()->cascadeOnDelete();
            $table->foreignId('company_id')->nullable()->index()->constrained()->nullOnDelete();
            $table->string('name');
            $table->text('description');
            $table->string('my_role')->nullable();
            $table->string('status')->default('active');
            $table->date('started_at')->nullable();
            $table->date('finished_at')->nullable();
            $table->string('repo_url')->nullable();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
