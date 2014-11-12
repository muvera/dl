                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('products')->delete();

		$items = array(

['cat_id'=>'1', 'artist_id'=>'2', 'genre_id'=>'1', 'img'=>'sample.jpg', 'name'=>'Album Name', 'description'=>'Description', 'catalog'=>'DL001', 'barcode'=>'0001'],
		);

		// Uncomment the below to run the seeder
		 DB::table('products')->insert($items);
	}

}
