<?php

class ArtistsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /artists
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$artists = Artist::get();
				return View::make('artists.index')
						->with('artists', $artists);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /artists/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('artists.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /artists
	 *
	 * @return Response
	 */
	public function store()
	{
		//
			$input = Input::get();
				if(!['name']) dd('You need a name');
				$artist = new Artist;
				$artist->name = $input['name'];
				$artist->alias = $input['alias'];
				$artist->save();
		
				return Redirect::to('/artists');
	}

	/**
	 * Display the specified resource.
	 * GET /artists/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
			$artist	 = Artist::findOrFail($id);

			Session::put('artist_id', $id);
		
				return View::make('artists.show')
					->with('artist',$artist );
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /artists/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
			$artist = Artist::findOrFail($id);
		
				return View::make('artists.edit')
						->with('artist',$artist );
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /artists/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$input = Input::get();
		$artist = Artist::findOrFail($id);
			$artist->name = $input['name'];
			$artist->alias = $input['alias'];
			$artist->save();
		
				return Redirect::to('artists/');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /artists/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$artist = Artist::findOrFail($id);
				$artist->delete();
				return Redirect::to('/artists');
	}

}