<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socails', function (Blueprint $table) {
            $table->id();
            $table->string('telegram', 100)->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('linkedin', 100)->nullable();
            $table->string('twitter', 100)->nullable();
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
        Schema::dropIfExists('socails');
    }
}
