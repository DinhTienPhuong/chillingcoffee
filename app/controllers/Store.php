<?php
class Store extends Controller{

    public $StoreModel;
    public $request, $response;

    public function __construct(){
        $this->StoreModel = $this->model('StoreModel');
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
            
        $data['content'] = 'admins.store.index'; 
         
        $data['sub_content']['list_categories'] = $this->StoreModel->all();

        $data['page_title'] = "Danh sách Chi Nhánh";

        return $this->view('layouts.admin_layout', $data);
    }

    public function add()         // view cần load ví dụ : insert
    {
        $this ->AuthLogin();

        $data['content'] = 'admins.store.add';

        $data['sub_content']['list_categories'] = $this->StoreModel->all();

        $data['page_title'] = "Thêm Chi Nhánh";

        return $this->view('layouts.admin_layout',$data);
    }

    public function edit($id)
    {  
        $this ->AuthLogin();

        $data['content'] = 'admins.store.edit';

        $data['sub_content']['store_by_id'] = $this->StoreModel->getCateById($id);
        $data['page_title'] = "Chỉnh sửa Chi Nhánh";

        return $this->view('layouts.admin_layout', $data);
        
    }
    public function destroy($id)
    {
        $this ->AuthLogin();

        $this->StoreModel->del($id);

        Session::flash('msg', 'Xóa Chi Nhánh thành công');
        
        return $this->response->redirect('store');
    }
  
    public function save(){    
        $this ->AuthLogin();
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'store_name' => 'required|min:6',
                'store_address' => 'required|min:10',
                'store_phone' => 'required|min:6'
            ]);

            //Set message
            $this->request->message([
                'store_name.required' => 'Tên Chi Nhánh không được để trống',
                'store_name.min' => 'Tên Chi Nhánh phải lớn hơn 6 ký tự',
                'store_address.required' => 'Số điện thoại Chi Nhánh không được để trống',
                'store_address.min' => 'Số điện thoại Chi Nhánh phải 10 ký tự',
                'store_phone.required' => 'Địa chỉ Chi Nhánh không được để trống', 
                'store_phone.min' => 'Địa chỉ Chi Nhánh phải lớn hơn 6 ký tự'
                
            ]);
        
            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('store-add');
            }

        }
        
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();
        // Đưa dữ liệu vào data
        $data = [
            'tenCN' => $dataFields['store_name'],
            'diaChi' => $dataFields['store_address'],
            'hinhAnh' => $dataFields['image'],
            'soDT' => $dataFields['store_phone'],
            'Create_at' => date('Y-m-d h:i:s')
        ];
        $get_image = $dataFile['image'];
        if ($get_image) {
            $uploadPath = "public/uploads/store/";
            $uniques_image = ProcessImage::checkImage($get_image, $uploadPath);
            if ($uniques_image) {
                $data['hinhAnh'] = $uniques_image;
            }
        }
        $this->StoreModel->add($data);
        Session::flash('msg', 'Thêm Chi Nhánh thành công');
        return $this->response->redirect('store');
    
    }

    public function update($id){
        $this ->AuthLogin();
        if ($this->request->isPost()){
            $this->request->rules([
            'store_name' => 'required|min:6',
            'store_address' => 'required|min:10',
            'store_phone' => 'required|min:6',
            ]);

            //Set message
            $this->request->message([
                'store_name.required' => 'Tên Chi Nhánh không được để trống',
                'store_name.min' => 'Tên Chi Nhánh phải lớn hơn 6 ký tự',
                'store_address.required' => 'Số điện thoại Chi Nhánh không được để trống',
                'store_address.min' => 'Số điện thoại Chi Nhánh phải 10 ký tự',
                'store_phone.required' => 'Địa chỉ Chi Nhánh không được để trống',
                'store_phone.min' => 'Địa chỉ Chi Nhánh phải lớn hơn 6 ký tự',
                
            ]);
            
            $validate = $this->request->validate();
            if (!$validate) {
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('store-update/id-'.$id);
            }
        }
    
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        $data = [
            'tenCN' => $dataFields['store_name'],
            'diaChi' => $dataFields['store_address'],
            'soDT' => $dataFields['store_phone'],
            'Update_at' => date('Y-m-d h:i:s')
        ];
        $get_image = $dataFile['image'];
        if ($get_image) {
            $uploadPath = "public/uploads/store/";
            $uniques_image = ProcessImage::checkImage($get_image, $uploadPath);
            if ($uniques_image) {
                $data['hinhAnh'] = $uniques_image;
            }
        }
        // Thêm dữ liệu vào dtb = models
        $this->StoreModel->edit($id, $data);
        Session::flash('msg', 'Cập nhật Chi Nhánh thành công');
        return $this->response->redirect('store');
    }
    public function status() {

        $dataFields = $this->request->getFields();

        $maCN = $dataFields['id'];

        $data['trangThai'] = $dataFields['status'];
        
        $this->StoreModel->edit($maCN,$data);
    }
}
