<?php

class GenresController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /genres
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$genres = Genre::get();
				return View::make('genres.index')
						->with('genres', $genres);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /genres/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('genres.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /genres
	 *
	 * @return Response
	 */
	public function store()
	{
		//
			$input = Input::get();
				if(!['name']) dd('You need a name');
				$genre = new Genre;
				$genre->name = $input['name'];
				$genre->description = $input['description'];
				$genre->save();
		
				return Redirect::to('/genres');
	}

	/**
	 * Display the specified resource.
	 * GET /genres/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
			$genre	 = Genre::findOrFail($id);
			Session::put('genre_id', $id);
		
				return View::make('genres.show')
					->with('genre',$genre );
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /genres/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
			$genre = Genre::findOrFail($id);
		
				return View::make('genres.edit')
						->with('genre',$genre );
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /genres/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$input = Input::get();
		$genre = Genre::findOrFail($id);
			$genre->name = $input['name'];
			$genre->description = $input['description'];
			$genre->save();
		
				return Redirect::to('genres/');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /genres/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$genre = Genre::findOrFail($id);
				$genre->delete();
				return Redirect::to('/genres');
	}

}