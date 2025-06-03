<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutiveMembersTable extends Migration
{
    public function up()
    {
        Schema::create('executive_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('post');
            $table->string('picture')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('executive_members');
    }
}
