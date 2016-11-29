<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create ('products', function(Blueprint $t)
		{
			$t->increments('id');
			$t->string('name');
			$t->integer('cat_id');
			$t->text('body');
			$t->string('price');
			$t->string('picture');
			$t->string('picture_small');
			//$t->enum('showhide', array('show','hide'))->default('show');
			$t->integer('user_id');			
			$t->timestamps();
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
