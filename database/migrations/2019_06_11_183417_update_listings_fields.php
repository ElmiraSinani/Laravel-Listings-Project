<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateListingsFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
      Schema::table('listings', function (Blueprint $table) {
          $table->string('address')->nullable()->change();
          $table->string('website')->nullable()->change();
          $table->string('email')->nullable()->change();
          $table->string('phone')->nullable()->change();
          $table->string('bio')->nullable()->change();
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
