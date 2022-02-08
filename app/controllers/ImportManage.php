<?php
class ImportManage extends Controller{

    public $ImportManageModel, $IngredientModel, $ImportCategoryModel;
    public $request, $response;

    public function __construct(){
        $this->ImportManageModel = $this->model('ImportManageModel');
        $this->IngredientModel = $this->model('IngredientModel');
        $this->ImportCategoryModel = $this->model('ImportCategoryModel');
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

    public function index($id){
            
        $this ->AuthLogin();

        $data['content'] = 'admins.import_manage.index'; 
         
        $data['sub_content']['list_manage'] = $this->ImportManageModel->getCategory($id);

        $data['page_title'] = "Danh sách Phiếu Nhập";

        return $this->view('layouts.admin_layout', $data);

    }

    public function add()    
    {
        $data['content'] = 'admins.import_manage.add';

        $data['sub_content']['list_ingredient'] = $this->IngredientModel->all();
        $data['sub_content']['list_category'] = $this->ImportCategoryModel->all();

        $data['page_title'] = "Phiếu Nhập Chi Tiết";

        return $this->view('layouts.admin_layout',$data);
    }

    public function edit($id)
    {  
        $data['content'] = 'admins.import_manage.edit';
        
        $data['sub_content']['import_by_id'] = $this->ImportManageModel->getCateById($id);

        $data['page_title'] = "Thay Đổi Phiếu Nhập";

        return $this->view('layouts.admin_layout', $data);
        
    }

    public function destroy($id)
    {
        $this ->AuthLogin();
        $this->ImportManageModel->del($id);
        Session::flash('msg', 'Xóa chi thành công');
        return $this->response->redirect('import-category');
    }

    public function save()
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'import_amount' => 'required',
                'import_price' => 'required'
                
           ]);

            //Set message
            $this->request->message([
                'import_amount.required' => 'Tên thức uống không được để trống',
                'import_price.required' => 'Giá nhập không được để trống',
           ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('import-manage-add');
            }

        }
        
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        // Đưa dữ liệu vào data
        $data = [
            'maNL' => $dataFields['import_ingredient'],
            'amount' => $dataFields['import_amount'],
            'giaNhap' => $dataFields['import_price'],
            'maPN' => Session::data('import_id')
        ]; 
        $this->ImportManageModel->add($data);

        Session::flash('msg', 'Tạo chi tiết phiếu nhập thành công');
        return $this->response->redirect('import-manage-add');
    }

    public function update($id)
    {
        if ($this->request->isPost()) {
            /*Set rules*/
            $this->request->rules([
                'import_amount' => 'required',
                'import_price' => 'required'
            ]);

            //Set message
            $this->request->message([
                'import_amount.required' => 'Tên thức uống không được để trống',
                'import_price.required' => 'Giá nhập không được để trống',
            ]);
            $validate = $this->request->validate();
            if (!$validate) {
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('import-manage-edit/editid-' .$id);
            }
        }

        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        
        // Đưa dữ liệu vào data
        $data = [
            'amount' => $dataFields['import_amount'],
            'giaNhap' => $dataFields['import_price']
        ];    
     
        $this->ImportManageModel->edit($id, $data);
        Session::flash('msg', 'Cập nhật chi tiết phiếu nhập thành công');
        return $this->response->redirect('import-manage/id-'.$id);
    }
}
