<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('review__command__lists', function (Blueprint $table) {
            $table->id();
            $table->integer('id_review');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('review__command__lists');
    }
};
