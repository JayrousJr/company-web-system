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
            $table->string('clientName');
            $table->string('category');
            $table->unsignedBigInteger('requestID');
            $table->foreign('requestID')
                ->references('id')
                ->on('service_requests')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('clientID');
            $table->foreign('clientID')
                ->references('clientId')
                ->on('service_requests')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('projectClass');
            $table->foreign('projectClass')
                ->references('service_class')
                ->on('services')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('projectDate');
            $table->string('projectImage');
            $table->string('projectURL')->default('#');
            $table->string('projectStatus');
            $table->boolean('approved')->default(0);
            $table->text('projectDetails');
            $table->timestamps();
            $table->softDeletes();
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
