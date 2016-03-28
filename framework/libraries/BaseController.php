<?php

abstract class BaseController
{
	function __construct($action)
	{
		if(method_exists($this, $action))
		{
			$this->{$action}();
		}
		else{
			$this->error(404);
		}
	}

	function error($code = 404)
	{
		header("HTTP/1.0 404 Not Found");
		$View = new View();
		$View->name('errors_404');
		$View->title('Nowhere Land');
		$View->render();
	}

}
