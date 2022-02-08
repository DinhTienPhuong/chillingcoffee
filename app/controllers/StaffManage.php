<?php
class StaffManage extends Controller{

    public $StaffManageModel;
    public $province, $data;

    public function __construct(){
        $this->StaffManageModel = $this->model('StaffManageModel');
        $this->request = new Request();
        $this->response = new Response();
    }
    public function AuthLogin()
    {
        $check = Session::data('user-id');
        if(empty($check)){
            return $this->response->redirect('login');
        }
    }

    public function index()
    {
        
        $this ->AuthLogin();

        $data['content'] = 'admins.staff_manage.index'; 
         
        $data['sub_content']['list_categories'] = $this->StaffManageModel->all();
        
        $data['page_title'] = "Thông tin nhân viên";

        return $this->view('layouts.admin_layout', $data);
    
    }
    public function destroy($id)
    {
        $this ->AuthLogin();
        $this->StaffManageModel->del($id);
        Session::flash('msg', 'Xóa nhân viên thành công');
        return $this->response->redirect('staff-manage');
    }

    public function status() {

        $dataFields = $this->request->getFields();

        $maNV = $dataFields['id'];

        $data['trangThai'] = $dataFields['status'];
        
        $this->StaffManageModel->edit($maNV,$data);
    }

}