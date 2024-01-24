<?php
/**
 * Main Controller Class
 */

 class Controller
 {

	public function view($view, $data = array())
    {
        extract($data);

        // Hatag ng folder at view name
        $segments = explode('/', $view);

        // Alisin ang huli sa segments kung walang folder
        $file = array_pop($segments);

        // Itakda ang base path depende sa kung may folder o wala
        $basePath = $segments ? "../private/views/" . implode('/', $segments) . "/" : "../private/views/";

        $path = $basePath . "{$file}.view.php";

        if (file_exists($path)) {
            require($path);
        } else {
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