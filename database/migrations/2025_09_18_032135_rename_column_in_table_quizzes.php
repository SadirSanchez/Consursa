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
        Schema::table('quizzes', function (Blueprint $table) {
            $table->renameColumn('duration', 'timeLimit');
            $table->renameColumn('questions_count', 'numQuestions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quizzes', function (Blueprint $table) {
            $table->renameColumn('timeLimit', 'duration');
            $table->renameColumn('numQuestions', 'questions_count');
        });
    }
};
