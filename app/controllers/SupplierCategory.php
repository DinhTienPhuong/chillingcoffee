<?php
class SupplierCategory extends Controller{

    public $SupplierModel;
    public $request, $response;

    public function __construct(){
        $this->SupplierModel = $this->model('SupplierModel');
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


    public function index(){
        $this ->AuthLogin();
            
        $data['content'] = 'admins.supplier_category.index'; 
         
        $data['sub_content']['list_categories'] = $this->SupplierModel->all();

        $data['page_title'] = "Danh sách Nhà Cung Cấp";

        return $this->view('layouts.admin_layout', $data);
    }

    public function add()         // view cần load ví dụ : insert
    {
        $this ->AuthLogin();

        $data['content'] = 'admins.supplier_category.add';

        $data['sub_content']['list_categories'] = $this->SupplierModel->all();

        $data['page_title'] = "Thêm Nhà Cung Cấp";

        return $this->view('layouts.admin_layout',$data);
    }

    public function edit($id)
    {  
        $this ->AuthLogin();

        $data['content'] = 'admins.supplier_category.edit';

        $data['sub_content']['supplier_by_id'] = $this->SupplierModel->getCateById($id);
        $data['page_title'] = "Chỉnh sửa Nhà Cung Cấp";

        return $this->view('layouts.admin_layout', $data);
        
    }
    public function destroy($id)
    {
        $this ->AuthLogin();

        $this->SupplierModel->del($id);

        Session::flash('msg', 'Xóa Nhà Cung Cấp thành công');
        
        return $this->response->redirect('supplier-category');
    }
  
    public function save()
    {    
        $this ->AuthLogin();
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'supplier_name' => 'required|min:6',
                'supplier_email' => 'required|email|min:6|unique:nhacungcap:email',
                'supplier_sdt' => 'required|min:10',
                'supplier_address' => 'required|min:6',
            ]);

            //Set message
            $this->request->message([
                'supplier_name.required' => 'Tên Nhà Cung Cấp không được để trống',
                'supplier_name.min' => 'Tên Nhà Cung Cấp phải lớn hơn 6 ký tự',
                'supplier_email.required' => 'Email Nhà Cung Cấp không được để trống',
                'supplier_email.email' => 'Định dạng Email không hợp lệ',
                'supplier_email.min' => 'Email Nhà Cung Cấp phải lớn hơn 6 ký tự',
                'supplier_email.unique' => 'Email đã tồn tại trong hệ thống',
                'supplier_sdt.required' => 'Số điện thoại Nhà Cung Cấp không được để trống',
                'supplier_sdt.min' => 'Số điện thoại Nhà Cung Cấp phải 10 ký tự',
                'supplier_address.required' => 'Địa chỉ Nhà Cung Cấp không được để trống',
                'supplier_address.min' => 'Địa chỉ Nhà Cung Cấp phải lớn hơn 6 ký tự',
                
            ]);
        }
        $validate = $this->request->validate();
        if (!$validate){
            Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
            return $this->response->redirect('supplier-category-add');
        }

    
        
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        // Đưa dữ liệu vào data
        $data = [
            'tenNCC' => $dataFields['supplier_name'],
            'email' => $dataFields['supplier_email'],
            'soDT' => $dataFields['supplier_sdt'],
            'diaChi' => $dataFields['supplier_address'],
            'Create_at' => date('Y-m-d h:i:s')
        ];
        $this->SupplierModel->add($data);
        Session::flash('msg', 'Thêm nhà cung cấp thành công');
        return $this->response->redirect('supplier-category');
        
    }

    public function update($id)
    {
        $this ->AuthLogin();
        if ($this->request->isPost()){
            $this->request->rules([
                'supplier_name' => 'required|min:6',
                'supplier_email' => 'required|email|min:6|unique:nhacungcap:email',
                'supplier_sdt' => 'required|min:10',
                'supplier_address' => 'required|min:6',
            ]);

            //Set message
            $this->request->message([
                'supplier_name.required' => 'Tên Nhà Cung Cấp không được để trống',
                'supplier_name.min' => 'Tên Nhà Cung Cấp phải lớn hơn 6 ký tự',
                'supplier_email.required' => 'Email Nhà Cung Cấp không được để trống',
                'supplier_email.email' => 'Định dạng Email không hợp lệ',
                'supplier_email.min' => 'Email Nhà Cung Cấp phải lớn hơn 6 ký tự',
                'supplier_email.unique' => 'Email đã tồn tại trong hệ thống',
                'supplier_sdt.required' => 'Số điện thoại Nhà Cung Cấp không được để trống',
                'supplier_sdt.min' => 'Số điện thoại Nhà Cung Cấp phải 10 ký tự',
                'supplier_address.required' => 'Địa chỉ Nhà Cung Cấp không được để trống',
                'supplier_address.min' => 'Địa chỉ Nhà Cung Cấp phải lớn hơn 6 ký tự', 
                
            ]);
        }
        $validate = $this->request->validate();
        if (!$validate) {
            Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
            return $this->response->redirect('supplier-category-edit/editid-'.$id);
        }
        
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();
        // Đưa dữ liệu vào data
        $data = [
            'tenNCC' => $dataFields['supplier_name'],
            'email' => $dataFields['supplier_email'],
            'soDT' => $dataFields['supplier_sdt'],
            'diaChi' => $dataFields['supplier_address'],
            'Create_at' => date('Y-m-d h:i:s')
        ];    
        // Thêm dữ liệu vào dtb = models
        $this->SupplierModel->edit($id, $data);
        Session::flash('msg', 'Cập nhật nhà cung cấp thành công');
        return $this->response->redirect('supplier-category');
    }
}
