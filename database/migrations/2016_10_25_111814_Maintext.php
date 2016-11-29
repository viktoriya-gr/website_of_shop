<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maintext extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('maintexts', function(Blueprint $t){
		$t -> increments('id');
		$t ->string('name');
		$t ->text('body');
		$t ->string('url');
		$t ->timestamps();
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
		shema::drop('maintexts');
    }
}
