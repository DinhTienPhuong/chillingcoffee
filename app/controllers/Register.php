<?php
class Register extends Controller{

 
    public $request, $response;
    public $RegisterModel;

    public function __construct(){
     
        $this->request = new Request();
        $this->response = new Response();
        $this->RegisterModel = $this->model('RegisterModel');
    }
    public function index()
    {
        $data['content'] = 'admins.register.index'; // view cần load ví dụ : index

        $data['page_title'] = "Đăng ký";
        
        $data['sub_content']['list_categories'] = $this->RegisterModel->all();

        return $this->view('layouts.register_layout', $data);
    }

    public function register()
    {
        if ($this->request->isPost()){
            $this->request->rules([
                'regis-user' => 'required',
                'regis-pw'   => 'required|min:6',
       
                'regis-name' => 'required',
            ]);
            $this->request->message([
                'regis-user.required' => 'Tên đăng nhập không được để trống',
                'regis-name.required'  => 'Tên người dùng không được để trống',
                'regis-pw.required'  => 'Mật khẩu không được để trống',
                'regis-pw.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
       

            ]);
            $validate = $this->request->validate();
            if(!$validate){
                Session::flash('errors','Đã có lỗi xảy ra trong quá trình đăng nhập');
                return $this->response->redirect('register');
            }
            
        }
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();


        // Đưa dữ liệu vào data
        $data = [
            'userNV' => $dataFields['regis-user'],
            'tenNV' => $dataFields['regis-name'],
            'pwNV' => md5($dataFields['regis-pw'])
        ];
        // Thêm dữ liệu vào dtb = models
        $this->RegisterModel->add($data);
        // Session::flash('msg', 'Thêm loại đồ uống thành công');
        return $this->response->redirect('login');
    }

}