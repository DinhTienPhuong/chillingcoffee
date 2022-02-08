<?php
class LoginCus extends Controller{

 
    public $request, $response;
    public $LoginCusModel;

    public function __construct(){
     
        $this->request = new Request();
        $this->response = new Response();
        $this->LoginCusModel = $this->model('LoginCusModel');
    }
    public function AuthLogin()
    {
        $check = Session::data('userId');
        if(empty($check)){
            return $this->response->redirect('home');
        }
    }
    public function index()
    {
        $data['content'] = 'clients.account.index'; 

        $data['page_title'] = "Đăng nhập";

        return $this->view('layouts.login_layout', $data);
    }

    public function login(){

        if ($this->request->isPost()){
            $this->request->rules([
                'cus_user' => 'required|min:5',
                'cus_pass' => 'required|min:6'
            ]);
            $this->request->message([
                'cus_user.required' => 'Tên đăng nhập không được để trống',
                'cus_user.min' => 'Tên đăng nhập không được ít hơn 5 ký tự',
                'cus_pass.required' => 'Mật khẩu không được để trống',
                'cus_pass.min' => 'Mật khẩu phải lớn hơn 6 ký tự'

            ]);
            $validate = $this->request->validate();
            if(!$validate){
                Session::flash('errors','Đã có lỗi xảy ra trong quá trình đăng nhập');
                return $this->response->redirect('dang-nhap');
            }
            
        }
        $dataFields = $this->request->getFields();
        $data = [
            'userCus' => $dataFields['cus_user'],
            'pwCus' => md5($dataFields['cus_pass'])
        ];
        $result = $this->LoginCusModel->findById($data);
        if($result == 1){

            $cus_user= $this->LoginCusModel->findByUserName($dataFields['cus_user']);
           
            
            Session::data('cus-name',$cus_user['nguoiNhan']);
            Session::data('cus-user',$cus_user['userCus']);
            Session::data('cus-sdt',$cus_user['numberPhone']);
            Session::data('cus-address',$cus_user['address']);
            Session::data('cus-id',$cus_user['maKH']);
            return $this->response->redirect('trang-chu');
        }else{
           
            print_r(' <p style="text-align:center; font-size:20px">Sai tên đăng nhập hoặc mật khẩu<a href="dang-nhap" >Go Back</a></p>');
 
           die;
           
        }

    }
    public function repass(){
      
        $data['content'] = 'clients.account.re_pass'; 

        $data['page_title'] = "Quên Mật Khẩu";

        return $this->view('layouts.register_layout', $data);
    }

    public function save()
    {
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        // Đưa dữ liệu vào data
        $data = [
            'email' => $dataFields['cus_email']n
        ];
      
        // Thêm dữ liệu vào dtb = models
        $id = $this->DrinkManageModel->add($data);
        Session::data('product_id', $id);
        Session::data('img', $dataFile['image']);
        Session::flash('msg', 'Thêm loại đồ uống thành công');
        return $this->response->redirect('them-anh-thuc-uong');   
    }

    public function save()
    {
        $mailer = new Mailer();

        $dataFields = $this->request->getFields();
       
        // // Đưa dữ liệu vào data

        $data = [
            'subject' => $dataFields['feedback_title'],
            'content' => '<h3>Email Khách Hàng: '.$dataFields['cus_email'].'</h3><p>Mật khẩu được cấp lại: '.$dataFields['feedback_content'].'</p><p>Email: '.$dataFields['feedback_email'].'</p>',
        ];
      
        $mailer->sendMail('','',$data);

        return $this->response->redirect('goi-mail-thanh-cong');
        
    }
    public function reset(){
        
    }
  
}