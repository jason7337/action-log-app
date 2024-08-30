<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionLogsTable extends Migration
{
    public function up()
    {
        Schema::create('action_logs', function (Blueprint $table) {
            $table->id();
            $table->timestamp('action_time');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('operation_name');
            $table->string('modified_table')->nullable();
            $table->unsignedBigInteger('modified_record_id')->nullable();
            $table->string('page_section')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('action_status');
            $table->text('error_message')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('action_logs');
    }
}