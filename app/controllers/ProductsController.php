<?php

class ProductsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /products
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$products = Product::get();
				return View::make('products.index')
						->with('products',$products);

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /products/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$artists = Artist::get();
		$genres = Genre::get();
		$categories = Category::get();

		return View::make('products.create')
				->with('artists', $artists)
				->with('genres', $genres)
				->with('categories', $categories);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /products
	 *
	 * @return Response
	 */
	public function store()
	{
		//
			$input = Input::get();


			if(!['name']) dd('You need a name');
			$product = new Product;
			$product->name = $input['name'];
			$product->description = $input['description'];
			$product->save();


		
				return Redirect::to('/products' );
	}

	/**
	 * Display the specified resource.
	 * GET /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$product = Product::findOrFail($id);
		Session::put('album_id', $id);
	
				return View::make('products.show')
					->with('product', $product);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /products/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$product = Product::findOrFail($id);
		
				return View::make('products.edit')
						->with('product', $product);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

		public function upload()
	{


		$album_id = Input::get('album_id');
		$image = Input::file('image');
		$folder = public_path('/uploads/albums/'. $album_id);
		
		if(!file_exists($folder)){
			mkdir(public_path('/uploads/albums/'. $album_id));
		}
		$new_name = rand(700,0).'.jpg';
		$upload = $image->getClientOriginalName();

		$image->move(public_path('/uploads/albums/'. $album_id .'/'), $new_name);

		$album = Product::findOrFail($album_id);
		$album->img = $new_name;
		$album->save();

		return Redirect::back();
	}


}




