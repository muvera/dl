<?php

class CategoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */
	public function index()
	{
		//
			$categories = Category::get();
				return View::make('categories.index')
						->with('categories',$categories );
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categories
	 *
	 * @return Response
	 */
	public function store()
	{
		//
			$input= Input::get();
				if(!['name']) dd('You need a name');
			$category = new Category;
			$category->name = $input['name'];
			$category->description = $input['description'];
			$category->save();
		
				return Redirect::to('/categories');
	}

	/**
	 * Display the specified resource.
	 * GET /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$category = Category::findOrFail($id);
		Session::put('cat_id', $id);
		$products = Product::where('cat_id', '=', $id)->get();
		
				return View::make('categories.show')
					->with('category',$category )
					->with('products',$products );
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /categories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
			$category = Category::findOrFail($id);
		
				return View::make('categories.edit')
						->with('category',$category );
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$input = Input::get();
			$category = Category::findOrFail();
				$category->name = ['name'];
				$category->description = ['description'];
				$category->save();
		
				return Redirect::to('/categories/');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//

	$category = Category::findOrFail($id);
				$category->delete();
				return Redirect::to('/categories');
	}

}