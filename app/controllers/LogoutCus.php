<?php
class LogoutCus extends Controller{

 
    public $request, $response;
    public $LoginCusModel;

    public function __construct(){
     
        $this->request = new Request();
        $this->response = new Response();
        $this->LoginCusModel = $this->model('LoginCusModel');
    }


    public function logout()
    {
        Session::delete('cus-name');
        Session::delete('cus-id');
        return $this->response->redirect('dang-nhap');
    }


}