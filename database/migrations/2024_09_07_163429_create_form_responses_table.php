<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('form_responses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->text('skills_interested');
            $table->text('specializations_interested');
            $table->text('course_certification_importance');
            $table->text('course_format_preference');
            $table->text('support_mentorship_expectation');
            $table->string('course_budget');
            $table->text('long_term_goals');
            $table->text('prior_experience');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('form_responses');
    }
};