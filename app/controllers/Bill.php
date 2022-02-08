<?php
class Bill extends Controller{

    public $BillModel, $BillStatusModel, $PaymentMethodsModel,$StoreModel;
    public $request, $response;

    public function __construct(){
        $this->BillModel = $this->model('BillModel');
        $this->BillStatusModel = $this->model('BillStatusModel');
        $this->PaymentMethodsModel = $this->model('PaymentMethodsModel');
        $this->BillDetailModel = $this->model('BillDetailModel');
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

        $data['content'] = 'admins.bill_manage.index'; 

        $current_page = 1;

        // echo $current_page;
       
       $billTotal = $this -> BillModel->count_product(); // Lấy tổng số sản phẩm

       $billOnePage = 5 ; // Số sản phẩm hiển thị trong 1 trang


       $pageTotal = ceil($billTotal / $billOnePage);

       $limit = ($current_page - 1) * $billOnePage;

       $data['sub_content']['list_bill'] = $this->BillModel->get_all_post($limit , $billOnePage); 

       $data['sub_content']['current_page'] = $current_page;

       $data['sub_content']['pageTotal'] = $pageTotal;


         
        // $data['sub_content']['list_bill'] = $this->BillModel->getBill();

        $data['page_title'] = "Danh sách Hóa Đơn";

        return $this->view('layouts.admin_layout', $data);
    }

    public function bill_pages($page){

        $this ->AuthLogin();
        
        $data['content'] = 'admins.bill_manage.index'; 

        $current_page = $page;
       
        $billTotal = $this -> BillModel->count_product(); // Lấy tổng số sản phẩm
 
        $billOnePage = 5 ; // Số sản phẩm hiển thị trong 1 trang
 
 
        // khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tỉnh được tổng số trang
 
        $pageTotal = ceil($billTotal / $billOnePage);
 
        $limit = ($current_page - 1) * $billOnePage;
       
        $data['sub_content']['list_bill'] = $this->BillModel->get_all_post($limit , $billOnePage); 
 
        $data['sub_content']['current_page'] = $current_page;
 
        $data['sub_content']['pageTotal'] = $pageTotal;
 
        $data['page_title'] = "Danh sách Hóa Đơn";

        return $this->view('layouts.admin_layout', $data);
    }

    public function add()
    {

        $check = Session::data('cus-id');
        if(empty($check)){
            return $this->response->redirect('dang-nhap');
        }else{
            $transport_fee = 10000;
            $grand_total = 0;
    
            if(isset($_SESSION['cart'])){
                $data['sub_content']['cart_prod'] = $_SESSION['cart'];
                foreach ($_SESSION['cart'] as $key => $value) {
                    $grand_total += $value['tongTien'];
                }
                
                $grand_total +=  $transport_fee;
        
            } 
    
            $data['content'] = 'clients.cart.check_out';
            $data['sub_content']['list_store'] = $this->StoreModel->all();
            $data['sub_content']['list_categories'] = $this->BillModel->all();
            $data['sub_content']['list_payment'] = $this->PaymentMethodsModel->all();
    
            $data['sub_content']['grand_total'] = $grand_total;
    
            $data['page_title'] = "Xác Nhận Đơn Hàng";
    
            return $this->view('layouts.client_layout',$data);
        }
    }

    public function edit($id)
    {  
        if(isset($_SESSION['cart'])){
            $data['sub_content']['cart_prod'] = $_SESSION['cart'];
        }
        $data['content'] = 'admins.bill_manage.edit';

        $data['sub_content']['Bill_by_id'] = $this->BillModel->getCateById($id);
        $data['sub_content']['list_bill_status'] = $this->BillStatusModel->status($id);
        $data['sub_content']['list_categories'] = $this->BillDetailModel->getOrder($id);
        

        $data['page_title'] = "Thay Đổi Trạng Thái Hóa Đơn";

        return $this->view('layouts.admin_layout', $data);
        
    }

    public function destroy($id)
    {
        $this->BillModel->del($id);
        Session::flash('msg', 'Xóa thành công');
        return $this->response->redirect('bill-manage');
    }
  
    public function save()
    {
        if(!empty($_SESSION['cart'])){
            $data_bill = $this->request->getFields();
            
            $sub_total = 10000;
            $total = 0;

            foreach($_SESSION['cart'] as $key => $value){
                $sub_total += $value['tongTien'];
            }
            $total = $sub_total;
        }

        $data = [
            'maPT' => $data_bill['bill_status'],
            'maKH' => Session::data('cus-id'),
            'maCN' => $data_bill['bill_store'],
            'tongTien' =>  $total,
            'Create_at' => date('Y-m-d h:i:s')
        ];

        $bill_id = $this->BillModel->add($data);
      
        Session::data('bill_id', $bill_id);
        Session::data('payment_id', $data['payment_id']);
        Session::data('drink_id', $data['drink_id']);

        Session::flash('msg', 'Tạo đơn hàng thành công');
        return $this->response->redirect('bill-status-save');
        
    }

    public function update($id)
    {
        $dataFields = $this->request->getFields();
        // Đưa dữ liệu vào data
        $data = [
            'tenTT' => $dataFields['bill_status'],
        ]; 
        Session::data('bill_status', $data['tenTT']);
        
        return $this->response->redirect('bill-status-update/updated-'.$id);
    }
}
