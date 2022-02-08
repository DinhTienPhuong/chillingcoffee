<?php
class Login extends Controller{

 
    public $request, $response;
    public $userModel;

    public function __construct(){
     
        $this->request = new Request();
        $this->response = new Response();
        $this->userModel = $this->model('UserModel');
    }
    public function AuthLogin()
    {
        $check = Session::data('userId');
        if(empty($check)){
            return $this->response->redirect('admin');
        }
    }
    public function index()
    {
        $data['content'] = 'admins.login.index'; // view cần load ví dụ : index

        $data['page_title'] = "Đăng nhập";


        return $this->view('layouts.login_layout', $data);
    }

    public function login(){

        if ($this->request->isPost()){
            $this->request->rules([
                'userNV' => 'required',
                'pwNV'   => 'required|min:6'
            ]);
            $this->request->message([
                'userNV.required' => 'Tên đăng nhập không được để trống',
                'pwNV.required'  => 'Mật khẩu không được để trống',
                'pwNV.min' => 'Mật khẩu phải có ít nhất 6 ký tự'

            ]);
            $validate = $this->request->validate();
            if(!$validate){
                Session::flash('errors','Đã có lỗi xảy ra trong quá trình đăng nhập');
                return $this->response->redirect('login');
            }
            
        }
        $dataFields = $this->request->getFields();
        $data = [
            'userNV' => $dataFields['userNV'],
            'pwNV' => $dataFields['pwNV']
        ];
        $result = $this->userModel->findById($data);
        if($result == 1){

            $user= $this->userModel->findByUserName($dataFields['userNV']);
            Session::data('user-name',$user['tenNV']);
            Session::data('user-id',$user['maNV']);
            Session::data('user-img',$user['avatar']);
            return $this->response->redirect('dashboard');
        }else{
            print_r(' <p style="text-align:center; font-size:20px">Sai tên đăng nhập hoặc mật khẩu<a href="login" >Go Back</a></p>');
           die;
           
        }

    }
  
}