<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class GenresTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('genres')->delete();

		$items = array(

['name'=>'Banda', 'description'=>'Horn Music'],
['name'=>'Norteno', 'description'=>'Acordion Music'],
['name'=>'Sierreno', 'description'=>'Guitar Music'],
['name'=>'Grupero', 'description'=>'Balda Synthesizer Music'],


		);

		// Uncomment the below to run the seeder
		 DB::table('genres')->insert($items);
	}

}
