<?php
/**
 * Main Controller Class
 */

 class Controller
 {
	public function view($view, $data = array())
	{
		extract($data);
	
		// Separate the view into folder and file
		$segments = explode('/', $view);
		$file = array_pop($segments);
	
		// Set the base path for the views
		$basePath = "../private/views/" . implode('/', $segments) . "/";
	
		// Adjust the path to include the file
		$path = $basePath . "{$file}.view.php";
	
		if (file_exists($path)) {
			require($path);
		} else {
			// Adjust the 404 path based on your directory structure
			require("../private/views/404.view.php");
		}
	}
	
	

	//     public function view($view, $data = array())
    // {
    //     extract($data);
	// 	// code...

	// 	if(file_exists("../private/views/" . $view . ".view.php"))
	// 	{
	// 		require ("../private/views/" . $view . ".view.php");
	// 	}else{
	// 		require ("../private/views/404.view.php");
	// 	}
	// }




	public function load_model($model)
	{
		if(file_exists("../private/models/" .ucfirst($model) . ".php"))
		{
			require ("../private/models/" .ucfirst($model) . ".php");
			return $model = new $model();

		}

		return false;

	}
	
	public function redirect($link)
	{
		header("location: ". ROOT . "/" . trim($link, "/"));
		die;

	}

 }