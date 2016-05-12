<?php

	session_start();

	/*
		Place get data into session so that we can retain the state of the
		app in the user's session.
	*/

	$defaultPage = 'Stations';

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

	$model = getModel();
	$view = getView();
	$controller = getController( $model, $view );

	if(isset($_SESSION['add']))
	{
		$controller->addToFavourites();
	}

	else if(isset($_SESSION['remove']))
	{
		$controller->removeFromFavourites();
	}

	else
	{
		$controller->update();
	}

	function getModel()
	{
		include './mvc/model/weathersystem.php';
		return new WeatherSystem();
	}

	function getView()
	{
		$viewPath = './mvc/view/' . strtolower( $_SESSION['page'] ) . '.view.php';
		$viewClass = $_SESSION['page'] . 'View';
		include $viewPath;
		return new $viewClass();
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

	

?>
