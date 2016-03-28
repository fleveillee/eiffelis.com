<?php

class MainController extends BaseController
{
    protected $view;

    public function __construct($action)
    {
        $this->view = new View();
        $this->view->name($action);

        parent::__construct($action);
    }

	function index()
	{
        $this->view->render();
	}

    function contact()
    {
        $this->view->render();
    }

    function portfolio()
    {
        $this->view->render();
    }

}
