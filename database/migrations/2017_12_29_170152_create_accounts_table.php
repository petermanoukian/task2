<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
     	$table->increments('id');
		$table->integer('services_id')->unsigned();		
		$table->string('name', 160);
		$table->string('contact_name', 160);
		$table->text('description');
		$table->string('logo', 160);
		
		$table->timestamps();
        });
		
		
		Schema::table('accounts', function($table) {
      $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');
   		});
    }
	
	
	

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
