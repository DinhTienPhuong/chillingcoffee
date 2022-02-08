<?php
class CusInfo extends Controller
{

    public $Customer_model;
    public $request, $response;

    public function __construct()
    {
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

    public function index()
    {
        $this->AuthLogin();
        
        $id = Session::data('cus-id');
        
        $data['sub_content']['customer'] = $this->Customer_model->find($id);

        $data['content'] = 'clients.cus_info.index'; 

        $data['sub_content']['list_categories'] = $this->Customer_model->all();

        $data['page_title'] = "Thông tin khách hàng";

        return $this->view('layouts.login_layout', $data);
    }

    // public function edit($id)
    // {
    //     $this->AuthLogin();

    

    //     $data['page_title'] = "Thêm thông tin";

    //     return $this->view('layouts.admin_layout', $data);
    // }
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
        return $this->response->redirect('cus-info');
        
    }

    public function destroy($id)
    {
        $this->AuthLogin();

        $this->Cate_model->del($id);
        Session::flash('msg', 'Xóa loại loại đồ uống thành công');
        return $this->response->redirect('staff-manage');
    }
    public function status()
    {
        $dataFields = $this->request->getFields();

        $maLoai = $dataFields['id'];

        $data['trangThai'] = $dataFields['status'];

        $this->Cate_model->edit($maLoai, $data);
    }
}
