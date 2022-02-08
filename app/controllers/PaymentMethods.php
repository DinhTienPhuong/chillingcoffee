<?php
class PaymentMethods extends Controller{

    public $PaymentMethodsModel;
    public $request, $response;

    public function __construct(){
        $this->PaymentMethodsModel = $this->model('PaymentMethodsModel');
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
        
        $data['content'] = 'admins.payment_methods.index'; 
         
        $data['sub_content']['list_payment'] = $this->PaymentMethodsModel->all();

        $data['page_title'] = "Danh sách Phương Thức Thanh Toán";

        return $this->view('layouts.admin_layout', $data);
    }

    public function add()         // view cần load ví dụ : insert
    {
        $data['content'] = 'admins.payment_methods.add';

        $data['sub_content']['list_categories'] = $this->PaymentMethodsModel->all();

        $data['page_title'] = "Thêm Phương Thức Thanh Toán";

        return $this->view('layouts.admin_layout',$data);
    }

    public function edit($id)
    {  
        $data['content'] = 'admins.payment_methods.edit';

        $data['sub_content']['payment_by_id'] = $this->PaymentMethodsModel->getCateById($id);

        $data['page_title'] = "Chỉnh sửa Phương Thức Thanh Toán"; 
        
        return $this->view('layouts.admin_layout', $data);
        
    }

    public function destroy($id)
    {
        $this ->AuthLogin();

        $this->PaymentMethodsModel->del($id);
        Session::flash('msg', 'Xóa Phương Thức Thanh Toán thành công');
        return $this->response->redirect('payment-methods');
    }
  
    public function save()
    {
        $this ->AuthLogin();
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'payment_name' => 'required|min:5|max:30',
                'payment_description' => 'required|min:5',
            ]);

            //Set message
            $this->request->message([
                'payment_name.required' => 'Tên phương thức thanh toán không được để trống',
                'payment_name.min' => 'Tên phương thức thanh toán phải lớn hơn 5 ký tự',
                'payment_name.min' => 'Tên phương thức thanh toán phải lớn hơn 5 ký tự',
                'payment_description.required' => 'Mô tả không được để trống',
                'payment_description.min' => 'Mô tả phải lớn hơn 5 ký tự',


            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('payment-methods-add');
            }

        }
        
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();
        // Đưa dữ liệu vào data
        $data = [
            'tenPT' => $dataFields['payment_name'],
            'moTa' => $dataFields['payment_description'],
            'Create_at' => date('Y-m-d h:i:s')
        ];
        $get_image = $dataFile['image'];
        if ($get_image) {
            $uploadPath = "public/uploads/payment_methods/";
            $uniques_image = ProcessImage::checkImage($get_image, $uploadPath);
            if ($uniques_image) {
                $data['hinhDD'] = $uniques_image;
            }
        }
        $this->PaymentMethodsModel->add($data);
        Session::flash('msg', 'Thêm Phương Thức Thanh Toán thành công');
        return $this->response->redirect('payment-methods');
        
    }

    public function update($id)
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'payment_name' => 'required|min:5|max:30',
                'payment_description' => 'required|min:5',
            ]);

            //Set message
            $this->request->message([
                'payment_name.required' => 'Tên phương thức thanh toán không được để trống',
                'payment_name.min' => 'Tên phương thức thanh toán phải lớn hơn 5 ký tự',
                'payment_name.min' => 'Tên phương thức thanh toán phải lớn hơn 5 ký tự',
                'payment_description.required' => 'Mô tả không được để trống',
                'payment_description.min' => 'Mô tả phải lớn hơn 5 ký tự',


            ]);
            $validate = $this->request->validate();
            if (!$validate) {
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('payment-methods-edit/editid-'.$id);
            }
        }
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();
        // Đưa dữ liệu vào data
        $data = [
            'tenPT' => $dataFields['payment_name'],
            'moTa' => $dataFields['payment_description'],
            'Update_at' => date('Y-m-d h:i:s')
        ];    
        $get_image = $dataFile['image'];
        if ($get_image) {
            $uploadPath = "public/uploads/payment_methods/";
            $uniques_image = ProcessImage::checkImage($get_image, $uploadPath);
            if ($uniques_image) {
                $data['hinhDD'] = $uniques_image;
            }
        }
        // Thêm dữ liệu vào dtb = models
        $this->PaymentMethodsModel->edit($id, $data);
        Session::flash('msg', 'Cập nhật Phương Thức Thanh Toán thành công');
        return $this->response->redirect('payment-methods');
    }

    public function status() {
        $dataFields = $this->request->getFields();

        $maPT = $dataFields['id'];

        $data['trangThai'] = $dataFields['status'];
        
        $this->Cate_model->edit($maPT,$data);
    }
}
