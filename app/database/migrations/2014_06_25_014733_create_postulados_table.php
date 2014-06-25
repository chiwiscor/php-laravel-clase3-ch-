<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostuladosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postulados', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('sitio_web');
            $table->text('descripcion');
            $table->enum('tipo_trabajo', ['completo', 'parcial', 'freelance']);
            $table->integer('id_categoria')->unsigned();
            $table->boolean('disponible');
            $table->string('slug');

            $table->foreign('id_categoria')->references('id')->on('categorias');
			
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
		Schema::drop('postulados');
	}

}
