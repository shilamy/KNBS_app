<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('directory_id');
            $table->string('name');
            $table->string('extension')->nullable();
            $table->tinyInteger('status')->default('0')->comment('1=hidden,0=visible');
           

            $table->foreign('directory_id')->references('id')->on('directories')->onDelete('cascade');
           
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
        Schema::dropIfExists('department');
    }
};
