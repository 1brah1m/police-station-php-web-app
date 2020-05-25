<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectorInstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspector_instructions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('case_no');
            $table->unsignedBigInteger('inspector_id');
            $table->string('station'); 
            $table->text('instructions'); 
            $table->date('start_date'); 
            $table->date('complete_date'); 
            $table->boolean('isCompleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspector_instructions');
    }
}
