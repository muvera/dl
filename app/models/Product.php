<?php

class Product extends \Eloquent {
	protected $fillable = ['cat_id', 'artist_id', 'genre_id', 'img', 'name', 'description', 'catalog', 'barcode'];
}