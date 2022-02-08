<?php
class Logout extends Controller{

 
    public $request, $response;
    public $userModel;

    public function __construct(){
     
        $this->request = new Request();
        $this->response = new Response();
        $this->userModel = $this->model('UserModel');
    }


    public function logout()
    {
        Session::delete('user-name');
        Session::delete('user-id');
        return $this->response->redirect('login');
    }


}