<?php

class CategoriaTableSeeder extends Seeder {

	public function run()
	{
		Categoria::create([
				'id' 	=>1,
				'nombre'=>'Desarrollador Backend',
				'slug'	=>'desarrolador-backend'
			]);
		Categoria::create([
				'id' 	=>2,
				'nombre'=>'Desarrollador Frontend',
				'slug'	=>'desarrollador-frontend'
			]);
		Categoria::create([
				'id' 	=>3,
				'nombre'=>'Dise',
				'slug'	=>'dise'
			]);
	}

}