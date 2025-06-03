<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProminentAlumni extends Migration
{
    public function up(): void
    {
        Schema::create('prominent_alumni', function (Blueprint $table) {
            $table->id();
            $table->string('alumniname');
            $table->text('description');
            $table->string('photo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prominent_alumni');
    }
}