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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('assigned_to')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('status', ['to_do', 'in_progress', 'done'])->default('to_do');
            $table->unsignedBigInteger('created_by');
            $table->date('due_date')->nullable();
            $table->timestamps();

            $table->index('project_id');
            $table->index('assigned_to');
            $table->index('status');

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('set null');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};