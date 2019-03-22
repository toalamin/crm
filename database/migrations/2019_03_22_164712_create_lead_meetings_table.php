<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadMeetingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('lead_meetings', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('lead_id');
            $table->string('subject', 128);
            $table->timestamp('date_time');
            $table->string('address', 128);
            $table->string('lat', 128);
            $table->string('long', 128);
            $table->text('note');
            $table->string('status', 32);
            $table->timestamps();
            $table->foreign('lead_id')->references('id')->on('leads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('lead_meetings');
    }

}
