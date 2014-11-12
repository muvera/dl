<?php
class UploadConfig {

	public static function make(){
$input = Input::get();
dd($input);
if(Input::file('image')==null)
{

}else{
dd(Session::get('album_id'));

			$album_id = Session::get('album_id');
		// 2 
			$image = Input::file('image');
		// 3
			$new_name = rand(700,0).'.jpg';
		// 4
			Session::put('new_name', $new_name);
		// 5
			$upload = $image->getClientOriginalName();
		// 6
			Session::put('upload', $upload);
		// 7

		// 8

		// 9

		// 10

		// 11
			$image->move(public_path('/uploads/artists/'. $album_id .'/'), $image->getClientOriginalName());

		}

	}




	public static function deleteDirectory($dir) { 
        if (!file_exists($dir)) { return true; }
        if (!is_dir($dir) || is_link($dir)) {
            return unlink($dir);
        }
        foreach (scandir($dir) as $item) { 
            if ($item == '.' || $item == '..') { continue; }
            if (!UploadConfig::deleteDirectory($dir . "/" . $item, false)) { 
                chmod($dir . "/" . $item, 0777); 
                if (!UploadConfig::deleteDirectory($dir . "/" . $item, false)) return false; 
            }; 
        } 
        return rmdir($dir); 
    }





}