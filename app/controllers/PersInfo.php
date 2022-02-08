<?php
class PersInfo extends Controller
{

    public $PersInfoModel;
    public $request, $response;

    public function __construct()
    {
        $this->PersInfoModel = $this->model('PersInfoModel');
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
        
        $id = Session::data('user-id');

        $data['sub_content']['userinfo'] = $this->PersInfoModel->find($id);

        $data['content'] = 'admins.pers_info.index'; 

        $data['sub_content']['list_categories'] = $this->PersInfoModel->all();

        $data['page_title'] = "Thông tin cá nhân";

        return $this->view('layouts.admin_layout', $data);
    }

    public function edit($id)
    {
        $this->AuthLogin();

        $data['content'] = 'admins.pers_info.edit';


        $data['page_title'] = "Thêm thông tin";

        return $this->view('layouts.admin_layout', $data);
    }
    public function update($id)
    {
        $this->AuthLogin();

        // if ($this->request->isPost()){
        //     /*Set rules*/
        //     $this->request->rules([
        //         'cate_name' => 'required|min:5',
        //     ]);

        //     //Set message
        //     $this->request->message([
        //         'cate_name.required' => 'Tên loại không được để trống',
        //         'cate_name.min' => 'Tên loại phải lớn hơn 5 ký tự',

        //     ]);

        //     $validate = $this->request->validate();
        //     if (!$validate){
        //         Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
        //         return $this->response->redirect('drink-category-edit/editid-'.$id);
        //     }

        // }
        // // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        $dataFile   = $this->request->getFiles();

        
    
        // Đưa dữ liệu vào data
        $data = [
            'tenNV'    => $dataFields['name_nv'],
            'diaChi'   => $dataFields['address_nv'],
            'soDT'     => $dataFields['sdt_nv'],
            'gioiTinh' => $dataFields['sex_nv'],
            'ngaySinh' => $dataFields['birth_nv']
        ];
        $get_image = $dataFile['avartar_nv'];
        if (!empty($get_image)) {
            $uploadPath = "public/uploads/drink_category/";
            $uniques_image = ProcessImage::checkImage($get_image, $uploadPath);
            if ($uniques_image) {
                $data['avatar'] = $uniques_image;
            }
        }
        // Thêm dữ liệu vào dtb = models
        $this->PersInfoModel->edit($id, $data);
        Session::flash('msg', 'Cập nhật thông tin thành công');
        return $this->response->redirect('pers-info');
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
