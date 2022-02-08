<?php
class DrinkManage extends Controller
{
    public $DrinkManageModel, $DrinkCategoryModel;
    public $request, $response;

    public function __construct()
    {
        $this->DrinkManageModel = $this->model('DrinkManageModel');
        $this->DrinkCategoryModel = $this->model('DrinkCategoryModel');
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

        $current_page = 1;

        // echo $current_page;
       
       $productTotal = $this -> DrinkManageModel->count_product(); // Lấy tổng số sản phẩm

       $prodcutOnePage = 5 ; // Số sản phẩm hiển thị trong 1 trang

       $pageTotal = ceil($productTotal / $prodcutOnePage);

       $limit = ($current_page - 1) * $prodcutOnePage;

       $data['sub_content']['list_products'] = $this->DrinkManageModel->get_all_post($limit , $prodcutOnePage); 

       $data['sub_content']['current_page'] = $current_page;

       $data['sub_content']['pageTotal'] = $pageTotal;

       $data['content'] = 'admins.drink_manage.index'; 

        $data['page_title'] = "Danh sách thức uống";

        return $this->view('layouts.admin_layout', $data);
    }

    public function product_pages($page){

       $this ->AuthLogin();

       $current_page = $page;
       
       $productTotal = $this -> DrinkManageModel->count_product(); // Lấy tổng số sản phẩm

       $prodcutOnePage = 5 ; // Số sản phẩm hiển thị trong 1 trang


       // khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tỉnh được tổng số trang

       $pageTotal = ceil($productTotal / $prodcutOnePage);

       $limit = ($current_page - 1) * $prodcutOnePage;
      
       $data['sub_content']['list_products'] = $this->DrinkManageModel->get_all_post($limit , $prodcutOnePage); 

       $data['sub_content']['current_page'] = $current_page;

       $data['sub_content']['pageTotal'] = $pageTotal;

       $data['content'] = 'admins.drink_manage.index'; 


        $data['page_title'] = "Danh sách thức uống";

        return $this->view('layouts.admin_layout', $data);
    }


    public function add()         // view cần load ví dụ : insert
    {
        $this ->AuthLogin();

        $data['content'] = 'admins.drink_manage.add';

        $data['sub_content']['list_categories'] = $this->DrinkCategoryModel->all();

        $data['page_title'] = "Thêm thức uống";

        return $this->view('layouts.admin_layout',$data);
    }

    public function save()
    {
        $this ->AuthLogin();

        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'drink_name' => 'required|min:5',
                'drink_price' => 'required',
                'drink_description' => 'required|min:5'
            ]);

            //Set message
            $this->request->message([
                'drink_name.required' => 'Tên thức uống không được để trống',
                'drink_name.min' => 'Tên thức uống không được ít hơn 5 ký tự',
                'drink_price.required' => 'Giá bán không được để trống',
                'drink_description.required' => 'Mô tả thức uống không được để trống',
                'drink_description.min' => 'Mô tả thức uống không được ít hơn 5 ký tự'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('drink-manage-add');
            }

        }
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();
        // Đưa dữ liệu vào data
        $data = [
            'tenTU' => $dataFields['drink_name'],
            'maLoai' => $dataFields['drink_cate_name'],
            'donGia' => $dataFields['drink_price'],
            'moTa' => $dataFields['drink_description'],
            'Create_at' => date('Y-m-d h:i:s')
        ];
      
        // Thêm dữ liệu vào dtb = models
        $id = $this->DrinkManageModel->add($data);
        Session::data('product_id', $id);
        Session::data('img', $dataFile['image']);
        Session::flash('msg', 'Thêm loại đồ uống thành công');
        return $this->response->redirect('them-anh-thuc-uong');
    }
    public function edit($id)
    {
        $this ->AuthLogin();

        $data['content'] = 'admins.drink_manage.edit';

        $data['sub_content']['manage_by_id'] = $this->DrinkManageModel->getCateById($id);
        
        $data['sub_content']['list_categories'] = $this->DrinkCategoryModel->all();

        $data['page_title'] = "Chỉnh sửa thức uống";

        return $this->view('layouts.admin_layout', $data);
    }
    
    public function destroy($id)
    {
        $this ->AuthLogin();
        $this->DrinkManageModel->del($id);
        Session::flash('msg', 'Xóa loại đồ uống thành công');
        return $this->response->redirect('drink-manage');
    }

    public function update($id)
    {
        $this ->AuthLogin();
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'drink_name' => 'required|min:5',
                'drink_price' => 'required',
                'drink_description' => 'required|min:5'
            ]);

            //Set message
            $this->request->message([
                'drink_name.required' => 'Tên thức uống không được để trống',
                'drink_name.min' => 'Tên thức uống không được ít hơn 5 ký tự',
                'drink_price.required' => 'Giá bán không được để trống',
                'drink_description.required' => 'Mô tả thức uống không được để trống',
                'drink_description.min' => 'Mô tả thức uống không được ít hơn 5 ký tự'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('drink-manage-edit/editid-'.$id);
            }

        }
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();
 
        // Đưa dữ liệu vào data
        $data = [
            'tenTU' => $dataFields['drink_name'],
            'maLoai' => $dataFields['drink_cate_name'],
            'donGia' => $dataFields['drink_price'],
            'moTa' => $dataFields['drink_description'],
            'Create_at' => date('Y-m-d h:i:s')
        ];

        // Thêm dữ liệu vào dtb = models
        $this->DrinkManageModel-> edit( $id, $data);
        $img_id = $dataFields['img_id'];
        Session::data('img', $dataFile['image']);
        Session::flash('msg', 'Cập nhật đồ uống thành công');
        return $this->response->redirect('sua-anh-thuc-uong-edit/editid-'.$img_id);
    }
    
    public function find(){
        $this ->AuthLogin();
        
        $data['content'] = 'admins.drink_manage.filter';

        $current_page = 1;

        // echo $current_page;
       
        $productTotal = $this -> DrinkManageModel->count_product(); 

        $prodcutOnePage = 5 ;


        // khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tỉnh được tổng số trang

        $pageTotal = ceil($productTotal / $prodcutOnePage);

        $limit = ($current_page - 1) * $prodcutOnePage;

        $dataFields = $this->request->getFields();

        $newData = [
            'tenTU' =>  $dataFields['drinkName']
        ];
        
        if($newData['tenTU'] == ""){
            
            $data['sub_content']['list_products'] = $this->DrinkManageModel->all();

        $data['sub_content']['list_products'] = $this->DrinkCategoryModel->get_all_post($limit , $prodcutOnePage);
        }else{
            $data['sub_content']['list_products'] = $this->DrinkManageModel->findByName($newData);
        }

        $data['sub_content']['current_page'] = $current_page;

        $data['sub_content']['pageTotal'] = $pageTotal;

        return $this->view('layouts.admin_layout',$data);
    }

    public function find_product_pages($page){

        $this ->AuthLogin();
 
        $current_page = $page;
        
        $productTotal = $this -> DrinkManageModel->count_product();
 
        $prodcutOnePage = 5 ; 
 
        // khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tỉnh được tổng số trang
 
        $pageTotal = ceil($productTotal / $prodcutOnePage);
 
        $limit = ($current_page - 1) * $prodcutOnePage;
       
        $data['sub_content']['list_products'] = $this->DrinkManageModel->get_all_post($limit , $prodcutOnePage); 
 
        $data['sub_content']['current_page'] = $current_page;
 
        $data['sub_content']['pageTotal'] = $pageTotal;
 
        $data['content'] = 'admins.drink_manage.filter'; 
 
        $data['page_title'] = "Danh sách thức uống";
 
        return $this->view('layouts.admin_layout', $data);
     }

    public function detail($id)  
    {

        $data['content'] = 'clients.products.detail';

        $data['sub_content']['drink_detail'] = $this->DrinkManageModel->product_detail($id);
        
        $data['sub_content']['list_product'] = $this->DrinkManageModel->featured_products();

        $data['page_title'] = "Chi tiết thức uống";

        return $this->view('layouts.client_layout',$data);
    }

    public function status() {
        
        $dataFields = $this->request->getFields();

        $maTU = $dataFields['id'];

        $data['trangThai'] = $dataFields['status'];
        
        $this->DrinkCategoryModel->edit($maTU,$data);

    }
  
}
