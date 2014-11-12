<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class ArtistsTableSeeder extends Seeder {
	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('artists')->delete();

		$items = array(
['name'=>'Chalino', 'alias'=>'Chalino Sanchez'], 
['name'=>'Saul Viera', 'alias'=>'El Gavilancillo'], 
['name'=>'Valentin Elizalde', 'alias'=>'El Gallo'], 
					);

		// Uncomment the below to run the seeder
		 DB::table('artists')->insert($items);
	}

}
