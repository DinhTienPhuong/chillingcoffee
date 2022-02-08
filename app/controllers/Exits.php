<?php 
	
	class Exits extends Controller
	{
	    public $request, $response;

	    public function __construct(){
	        $request = new Request();
	        $response = new Response();
	    }

	    public function index()
	    {
	    	$data['content'] = 'admins.exits';

	    	/* 
	    	$data['sub_content']['...'] = ...;

	    	$data['page_title'] = "Hông lường";

	    	*/

    		return $this->view('layouts.admin_layout', $data);
	    }

	}
	
 ?>