<?php

	session_start();

	/*
		Place get data into session so that we can retain the state of the
		app in the user's session.
	*/

	$defaultPage = "States";

	if(sizeof($_GET) > 0)
	{
		session_unset();
	
		foreach($_GET as $key => $value)
		{
			$_SESSION[$key] = $value;
		}

		header('Location: index.php');
		exit;
	}

	if(!isset($_SESSION['page']))
	{
		$_SESSION['page'] = $defaultPage;
	}

	/* If a controller doesn't exist, check if there's a page template*/
	if( !controllerExists() )
	{
		$viewPath = $viewPath = './mvc/view/' . strtolower( $_SESSION['page'] . '.php' );
		
		if( file_exists( $viewPath ) )
		{
			include $viewPath;
			exit;
		}
		
		echo "Page doesn't exist";
		exit;
	}

	else
	{
		$model = getModel();
		$view = getView();
		$controller = getController( $model, $view );

		if(isset($_SESSION['add']))
		{
			$controller->addToFavourites($_SESSION['add']);
		}

		else if(isset($_SESSION['remove']))
		{
			$controller->removeFromFavourites($_SESSION['remove']);
		}
	
		if(isset($_SESSION['forecaster']))
		{
			$controller->setForecaster($_SESSION['forecaster']);
		}

		$controller->update();
	}

	function getModel()
	{
		include './mvc/model/weathersystem.php';
		return new WeatherSystem();
	}

	function getView()
	{
		if(isset($_SESSION['page']))
		{
			$viewPath = './mvc/view/' . strtolower( $_SESSION['page'] ) . '.view.php';		
			$viewClass = $_SESSION['page'] . 'View';
			include $viewPath;
			return new $viewClass();
		}
	}

	function getController( $model, $view )
	{
		if(isset($_SESSION['page']))
		{
			$controllerPath = './mvc/controller/' . strtolower($_SESSION['page']) . '.controller.php';
			$controllerClass = $_SESSION['page'] . 'Controller';
			include $controllerPath;
			return new $controllerClass ( $model, $view );
		}

	}
	
	function controllerExists()
	{
		$controllerPath = './mvc/controller/' . strtolower($_SESSION['page']) . '.controller.php';
		return file_exists( $controllerPath );
	}

?>
