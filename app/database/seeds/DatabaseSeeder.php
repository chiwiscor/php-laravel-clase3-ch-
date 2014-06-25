<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('CategoriaTableSeeder');
		$this->call('PostuladoTableSeeder');
		$this->call('UsuarioTableSeeder');
		// $this->call('UserTableSeeder');
	}

}
