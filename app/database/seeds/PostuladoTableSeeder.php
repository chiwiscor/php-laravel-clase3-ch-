<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostuladoTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 80) as $index)
		{
			$nombreCompleto=$faker->name;
			
			$usuario=Usuario::create([
				'nombre_completo'	=>$nombreCompleto,
				'correo_electronico'=>$faker->email,
				'pass'				=>\Hash::make(123456),
				'tipo_usuario'		=>'normal'
				]);
			Postulado::create([
				'id'			=>$usuario->id,
				'sitio_web'		=>$faker->url,
				'descripcion'	=>$faker->text(200),
				'tipo_trabajo'	=>$faker->randomElement(['completo', 'parcial', 'freelance']),
				'id_categoria'	=>$faker->randomElement([1,2,3]),
				'disponible'	=>true,
				'slug'			=>\Str::slug($nombreCompleto)
			]);
		}
	}

}