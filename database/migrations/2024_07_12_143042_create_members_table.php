<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {Schema::create('members', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('role');
        $table->foreignId('project_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
    }

    public function down()
    {
        Schema::dropIfExists('members');
    }
};
