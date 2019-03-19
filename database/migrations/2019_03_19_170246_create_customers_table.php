<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('first_name', 64);
            $table->string('last_name', 64);
            $table->string('email')->unique();
            $table->string('password', 96);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile_number')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('type', 128)->nullable();
            $table->text('address')->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
