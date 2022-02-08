<?php
class Customer extends Controller{

    public $Customer_model;
    public $request, $response;

    public function __construct(){
        $this->Customer_model = $this->model('CustomerModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function AuthLogin()
    {
        $check = Session::data('user-id');
        if (empty($check)) {
            return $this->response->redirect('login');
        }
    }

    public function index(){

        $this ->AuthLogin();
            
        $data['content'] = 'admins.customer.index';  

        $current_page = 1;
       
        $cusTotal = $this -> Customer_model->count_cus(); 

        $cusOnePage = 3 ; 

        $pageTotal = ceil($cusTotal / $cusOnePage);

        $limit = ($current_page - 1) * $cusOnePage;

        $data['sub_content']['list_cus'] = $this->Customer_model->get_all_cus($limit , $cusOnePage); 

        $data['sub_content']['current_page'] = $current_page;

        $data['sub_content']['pageTotal'] = $pageTotal;

        $data['page_title'] = "Danh sách Khách Hàng";

        return $this->view('layouts.admin_layout', $data);
    }


    public function cus_post_pages($page){

        $this ->AuthLogin();
        
        $current_page = $page;

        $data['content'] = 'admins.customer.index'; 
       
        $cusTotal = $this -> Customer_model->count_cus(); 

        $cusOnePage = 3 ; 

        $pageTotal = ceil($cusTotal / $cusOnePage);

        $limit = ($current_page - 1) * $cusOnePage;

        $data['sub_content']['list_cus'] = $this->Customer_model->get_all_cus($limit , $cusOnePage); 

        $data['sub_content']['current_page'] = $current_page;

        $data['sub_content']['pageTotal'] = $pageTotal;

        $data['page_title'] = "Danh sách bài viết";

        return $this->view('layouts.admin_layout', $data);
     }

    public function add()         
    {         
        $data['content'] = 'clients.account.add_cus'; 

        $data['page_title'] = "Đăng Ký";

        return $this->view('layouts.login_layout',$data);
    }

    public function edit($maKH)
    {
        $data['content'] = 'clients.account.edit_cus'; 

        $id = Session::data('cus-id');
        
        // $data['sub_content']['customer'] = $this->Customer_model->find($id);

        $data['sub_content']['customer'] = $this->Customer_model->getCateById($maKH); 

        $data['page_title'] = "Cập Nhật Thông Tin Khách Hàng";

        return $this->view('layouts.login_layout',$data);
    }

    public function save()
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'cus_name' => 'required|min:5',
                'cus_sdt' => 'required',
                'cus_address' => 'required|min:5',
                'email' => 'required|email|min:6|unique:khachhang:email',
                'cus_user' => 'required|min:5',
                'cus_pass' => 'required|min:6',
                'pass_confirm' => 'required|match:cus_pass'
            ]);

            //Set message
            $this->request->message([
                'cus_name.required' => 'Tên người nhận không được để trống',
                'cus_name.min' => 'Tên người nhận không được ít hơn 5 ký tự',
                'cus_sdt.required' => 'Số điện thoại không được để trống',
                'cus_address.required' => 'Địa chỉ không được để trống',
                'cus_address.min' => 'Địa chỉ không được ít hơn 5 ký tự',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Định dạng Email không hợp lệ',
                'email.min' => 'Email phải lớn hơn 6 ký tự',
                'email.unique' => 'Email đã tồn tại trong hệ thống',
                'cus_user.required' => 'Tên đăng nhập không được để trống',
                'cus_user.min' => 'Tên đăng nhập không được ít hơn 5 ký tự',
                'cus_pass.required' => 'Mật khẩu không được để trống',
                'cus_pass.min' => 'Mật khẩu phải lớn hơn 6 ký tự',
                'pass_confirm.required' => 'Nhập lại mật khẩu không được để trống',
                'pass_confirm.match' => 'Mật khẩu lại không khớp'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('dang-ky');
            }

        }

        $dataFields = $this->request->getFields();
        $data = [
            'nguoiNhan' => $dataFields['cus_name'],
            'numberPhone' => $dataFields['cus_sdt'],
            'address' => $dataFields['cus_address'],
            'email' => $dataFields['email'],
            'userCus' => $dataFields['cus_user'],
            'pwCus' => md5($dataFields['cus_pass']),
            'Create_at' => date('Y-m-d h:i:s')
        ];

     
        $cus = $this->Customer_model->add($data);
    
        Session::flash('msg', 'Đăng ký thành công');
        return $this->response->redirect('dang-nhap');
        
    }
  
    public function update($id)
    {
        // if ($this->request->isPost()){
        //     /*Set rules*/
        //     $this->request->rules([
        //         'cus_name' => 'required|min:5',
        //         'cus_sdt' => 'required',
        //         'cus_address' => 'required|min:5',
        //         'email' => 'required|email|min:6|unique:khachhang:email',
        //         'cus_user' => 'required|min:5',
        //         'cus_pass' => 'required|min:6',
        //         'pass_confirm' => 'required|match:cus_pass'
        //     ]);

        //     //Set message
        //     $this->request->message([
        //         'cus_name.required' => 'Tên người nhận không được để trống',
        //         'cus_name.min' => 'Tên người nhận không được ít hơn 5 ký tự',
        //         'cus_sdt.required' => 'Số điện thoại không được để trống',
        //         'cus_address.required' => 'Địa chỉ không được để trống',
        //         'cus_address.min' => 'Địa chỉ không được ít hơn 5 ký tự',
        //         'email.required' => 'Email không được để trống',
        //         'email.email' => 'Định dạng Email không hợp lệ',
        //         'email.min' => 'Email phải lớn hơn 6 ký tự',
        //         'email.unique' => 'Email đã tồn tại trong hệ thống',
        //         'cus_user.required' => 'Tên đăng nhập không được để trống',
        //         'cus_user.min' => 'Tên đăng nhập không được ít hơn 5 ký tự',
        //         'cus_pass.required' => 'Mật khẩu không được để trống',
        //         'cus_pass.min' => 'Mật khẩu phải lớn hơn 6 ký tự',
        //         'pass_confirm.required' => 'Nhập lại mật khẩu không được để trống',
        //         'pass_confirm.match' => 'Mật khẩu lại không khớp'
        //     ]);

        //     $validate = $this->request->validate();
        //     if (!$validate){
        //         Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
        //         return $this->response->redirect('dang-ky');
        //     }

        // }

        $dataFields = $this->request->getFields();
        $data = [
            'nguoiNhan' => $dataFields['cus_name'],
            'numberPhone' => $dataFields['cus_sdt'],
            'address' => $dataFields['cus_address'],
            'email' => $dataFields['email'],
            'userCus' => $dataFields['cus_user'],
            'Update_at' => date('Y-m-d h:i:s')
        ];

     
        $this->Customer_model->edit($id,$data);
    
        Session::flash('msg', 'Cập nhật thông tin thành công');
        return $this->response->redirect('dang-nhap');
        
    }
}
