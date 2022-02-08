<?php
class DrinkCategory extends Controller{

    public $Cate_model;
    public $request, $response;

    public function __construct(){
        $this->Cate_model = $this->model('DrinkCategoryModel');
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

        $data['content'] = 'admins.drink_category.index'; // view cần load ví dụ : index
         
        $data['sub_content']['list_categories'] = $this->Cate_model->all();

        $data['page_title'] = "Danh sách loại đồ uống";

        return $this->view('layouts.admin_layout', $data);
    }

    public function add()         // view cần load ví dụ : insert
    {
        $this ->AuthLogin();

        $data['content'] = 'admins.drink_category.add';

        $data['page_title'] = "Thêm loại đồ uống";
        
        $data['sub_content']['list_categories'] = $this->Cate_model->all();

        return $this->view('layouts.admin_layout', $data);
    }

    public function save()
    {
        $this ->AuthLogin();

        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'cate_name' => 'required|min:5',
            ]);

            //Set message
            $this->request->message([
                'cate_name.required' => 'Tên loại không được để trống',
                'cate_name.min' => 'Tên loại phải lớn hơn 5 ký tự',

            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('drink-category-add');
            }

        }
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
 
        // Đưa dữ liệu vào data
        $data = [
            'tenLoai' => $dataFields['cate_name']
          
        ];
        // Thêm dữ liệu vào dtb = models
        $this->Cate_model->add($data);
        Session::flash('msg', 'Thêm loại đồ uống thành công');
        return $this->response->redirect('drink-category');
        
    }

    public function edit($id)
    {  
        $this ->AuthLogin();

        $data['content'] = 'admins.drink_category.edit';

        $data['sub_content']['cate_by_id'] = $this -> Cate_model->getCateById($id);

        $data['page_title'] = "Chỉnh sửa loại đồ uống";

        return $this->view('layouts.admin_layout', $data);
        
    }

    public function update($id)
    {
        $this ->AuthLogin();

        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'cate_name' => 'required|min:5',
            ]);

            //Set message
            $this->request->message([
                'cate_name.required' => 'Tên loại không được để trống',
                'cate_name.min' => 'Tên loại phải lớn hơn 5 ký tự',

            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('drink-category-edit/editid-'.$id);
            }

        }
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
 
        // Đưa dữ liệu vào data
        $data = [
            'tenLoai' => $dataFields['cate_name']
        ];
        // Thêm dữ liệu vào dtb = models
        $this -> Cate_model-> edit( $id, $data);
        Session::flash('msg', 'Cập nhật loại đồ uống thành công');
        return $this->response->redirect('drink-category');
    }

    public function destroy($id)
    {
        $this ->AuthLogin();

        $this->Cate_model->del($id);
        Session::flash('msg', 'Xóa loại loại đồ uống thành công');
        return $this->response->redirect('drink-category');
    }

    public function status() {

        $dataFields = $this->request->getFields();

        $maLoai = $dataFields['id'];

        $data['trangThai'] = $dataFields['status'];
        
        $this->Cate_model->edit($maLoai,$data);
    }
}