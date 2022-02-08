<?php
class PostCategory extends Controller
{

    public $PostCategoryModel;
    public $province, $data;

    public function __construct()
    {
        $this->PostCategoryModel = $this->model('PostCategoryModel');
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

        $data['content'] = 'admins.post_category.index'; // view cần load ví dụ : index

        $data['sub_content']['list_categories'] = $this->PostCategoryModel->all();

        $data['page_title'] = "Danh mục bài viết";

        return $this->view('layouts.admin_layout', $data);
    }

    public function add()         // view cần load ví dụ : insert
    {
        $this->AuthLogin();

        $data['content'] = 'admins.post_category.add';

        $data['page_title'] = "Thêm danh mục bài viết";

        return $this->view('layouts.admin_layout', $data);
    }



    public function save()
    {
        $this->AuthLogin();
        //    if ($this->request->isPost()){
        //        /*Set rules*/
        //        $this->request->rules([
        //            'CatePostName' => 'required|min:5',
        //        ]);

        //        //Set message
        //        $this->request->message([
        //            'CatePostName.required' => 'Tên danh mục không được để trống',
        //            'CatePostName.min' => 'Tên danh mục phải lớn hơn 5 ký tự',

        //        ]);

        //        $validate = $this->request->validate();
        //        if (!$validate){
        //            Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
        //            return $this->response->redirect('post-category-add');
        //        }

        //    }
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();

        // Đưa dữ liệu vào data
        $data = [
            'tenDanhmuc' => $dataFields['CatePostName'],

        ];
        // Thêm dữ liệu vào dtb = models
        $this->PostCategoryModel->add($data);
        Session::flash('msg', 'Thêm danh mục bài viết thành công');
        return $this->response->redirect('post-category');
    }
    public function edit($id)
    {
        $this->AuthLogin();

        $data['content'] = 'admins.post_category.index';

        $data['sub_content']['cate_by_id'] = $this->PostCategoryModel->getCateById($id);

        $data['page_title'] = "Chỉnh sửa tên danh mục bài viết";

        return $this->view('layouts.admin_layout', $data);
    }
    public function update($id)
    {
        $this->AuthLogin();
        //    if ($this->request->isPost()){
        //        /*Set rules*/
        //        $this->request->rules([
        //            'CatePostName' => 'required|min:5',
        //        ]);

        //        //Set message
        //        $this->request->message([
        //            'CatePostName.required' => 'Tên danh mục không được để trống',
        //            'CatePostName.min' => 'Tên danh mục phải lớn hơn 5 ký tự',

        //        ]);

        //        $validate = $this->request->validate();
        //        if (!$validate){
        //            Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
        //            return $this->response->redirect('post-category-edit/editid-'.$id);
        //        }

        //    }
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();

        // Đưa dữ liệu vào data
        $data = [
            'tenDanhmuc' => $dataFields['editCatePostName'],

        ];
        // Thêm dữ liệu vào dtb = models
        $this->PostCategoryModel->edit($id, $data);
        //    Session::flash('msg', 'Cập nhật tên danh mục bài viết thành công');
        return $this->response->redirect('post-category');
    }
    public function destroy($id)
    {
        $this->AuthLogin();
        $this->PostCategoryModel->del($id);
        Session::flash('msg', 'Xóa loại loại đồ uống thành công');
        return $this->response->redirect('post-category');
    }
    public function status()
    {
        $dataFields = $this->request->getFields();

        $maDanhmuc = $dataFields['id'];

        $data['trangThai'] = $dataFields['status'];

        $this->PostCategoryModel->edit($maDanhmuc, $data);
    }
}
