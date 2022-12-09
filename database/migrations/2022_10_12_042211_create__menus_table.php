<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_menus', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('category');
			$table->string('description');
			$table->string('price');
			$table->string('Photo',3000);
			
			
            $table->timestamp('time')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_menus');
    }
}
