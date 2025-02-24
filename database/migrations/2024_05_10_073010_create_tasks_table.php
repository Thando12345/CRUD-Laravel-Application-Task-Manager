<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('title'); // Title of the task
            $table->text('description')->nullable(); // Description of the task (nullable)
            $table->enum('status', ['pending', 'in progress', 'completed'])->default('pending'); // Status of the task
            $table->timestamps(); // Timestamps for creation and updates
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks'); // Drop the tasks table if it exists
    }
}
