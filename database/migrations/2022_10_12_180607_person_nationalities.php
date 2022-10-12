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
        Schema::create('nationalities_person', function (Blueprint $table) {
            $table->primary(['nationalities_id', 'person_id']);
            $table->unsignedBigInteger('nationalities_id');
            $table->unsignedBigInteger('person_id');
            $table->timestamps();

            $table->foreign('nationalities_id')->references('id')->on('nationalities')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('person_id')->references('id')->on('people')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_nationalities');
    }
};
