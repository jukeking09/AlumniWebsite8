<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterTables extends Migration {
    public function up(): void
    {
        // Titles
        Schema::create('titles', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // e.g., Dr., Mr., Ms., etc.
            $table->timestamps();
        });

        // Country codes
        Schema::create('country_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code'); // e.g., +91
            $table->string('country_name');
            $table->timestamps();
        });

        // Courses
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name'); // e.g., PU, Degree, Masters
            $table->timestamps();
        });

        // Departments
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('department_name');
            $table->timestamps();
        });

        //Roles
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name'); // e.g., Admin, User
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('departments');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('country_codes');
        Schema::dropIfExists('titles');
        Schema::dropIfExists('roles');
    }
};
