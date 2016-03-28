<?php

class View
{
	protected $name;
	protected $title = '';


	function __construct($value=null)
	{
		if(isset($value)){ $this->name($value); }
	}

	function name($value = null)
	{
		if(isset($value)){ $this->name = $value; }
		return $this->name;
	}

	function title($value = null)
	{
		if(isset($value)){ $this->title = $value; }
		return $this->title;
	}


	function render()
	{
		$view = $this;
		require 'views/main.php';
	}


	protected function renderBody()
	{
		require 'views/'.str_replace('_', '/',$this->name()).'.php';
	}



}
