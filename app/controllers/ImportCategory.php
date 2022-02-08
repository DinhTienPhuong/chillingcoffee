<?php
class ImportCategory extends Controller{

    public $ImportCategoryModel, $SupplierModel, $StoreModel ,$PersInfoModel;
    public $request, $response;

    public function __construct(){
        $this->ImportCategoryModel = $this->model('ImportCategoryModel');
        $this->SupplierModel = $this->model('SupplierModel');
        $this->StoreModel = $this->model('StoreModel');
        $this->PersInfoModel = $this->model('PersInfoModel');
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

        $data['content'] = 'admins.import-category.index'; 
         
        $data['sub_content']['list_categories'] = $this->ImportCategoryModel->getCategory();

        $data['page_title'] = "Danh sách Phiếu Nhập";

        return $this->view('layouts.admin_layout', $data);
    }

    public function add()    
    {
        $data['content'] = 'admins.import-category.add';

        $data['sub_content']['list_categories'] = $this->SupplierModel->all();
        $data['sub_content']['list_store'] = $this->StoreModel->all();
        $data['sub_content']['list_staff'] = $this->PersInfoModel->all();

        $data['page_title'] = "Phiếu Nhập";

        return $this->view('layouts.admin_layout',$data);
    }

    public function destroy($id)
    {
        $this ->AuthLogin();
        $this->ImportCategoryModel->del($id);
        Session::flash('msg', 'Xóa hóa đơn thành công');
        return $this->response->redirect('import-category');
    }

    public function save()
    {
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        // Đưa dữ liệu vào data
        $data = [
            'maNV' => $dataFields['import_staff'],
            'maNCC' => $dataFields['import_supplier'],
            'maCN' => $dataFields['import_name'],
            'Create_at' => date('Y-m-d h:i:s')
        ]; 
        $import_id = $this->ImportCategoryModel->add($data);

        Session::data('import_id', $import_id);

        Session::flash('msg', 'Tạo phiếu nhập thành công');
        return $this->response->redirect('import-manage-add');
        
    }

}
