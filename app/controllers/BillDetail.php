<?php
class BillDetail extends Controller
{

    public $BillDetailModel, $DrinkManageModel;
    public $request, $response;

    public function __construct(){
        $this->BillDetailModel = $this->model('BillDetailModel');
        $this->DrinkManageModel = $this->model('DrinkManageModel');
        $this->request = new Request();
        $this->response = new Response();
    }
    public function AuthLogin()
    {
        $check = Session::data('cus-id');
        if(empty($check)){
            return $this->response->redirect('dang-nhap');
        }
    }

    public function index($id)
    {

        $data['content'] = 'admins.bill_detail.index';

        $data['sub_content']['list_categories'] = $this->BillDetailModel->getOrder($id);

        $data['page_title'] = "Danh sách loại đồ uống";

        return $this->view('layouts.admin_layout', $data);
    }

    public function destroy($id)
    {
        $this->BillDetailModel->del($id);
        Session::flash('msg', 'Xóa thành công');
        return $this->response->redirect('bill-manage');
    }

    public function add()         
    {
       
        
        if(isset($_SESSION['cart'])){
            $data['sub_content']['cart_prod'] = $_SESSION['cart'];
        } 

        $data['content'] = 'clients.cart.check_out';

        $data['sub_content']['list_categories'] = $this->BillModel->all();
        $data['sub_content']['list_payment'] = $this->PaymentMethodsModel->all();

        
        $transport_fee = 10;
        $grand_total = 0;

        foreach ($_SESSION['cart'] as $key => $value) {
            $grand_total += $value['tongTien'];
        }
        $grand_total +=  $transport_fee;


        $data['sub_content']['grand_total'] = $grand_total;

        $data['page_title'] = "Xác Nhận Đơn Hàng";

        return $this->view('layouts.client_layout',$data);
    }


    public function save()
    {
        if(isset($_SESSION['cart'])){

            // Đưa dữ liệu vào data
            foreach($_SESSION['cart'] as $key => $value){
                $data = [
                    'maTU' => $value['maTU'],
                    'tenTU' => $value['tenTU'],
                    'soLuong' => $value['soLuong'],
                    'giaTien' => $value['donGia'],
                    'maHD' => Session::data('bill_id')
                
                ];
                $this->BillDetailModel->add($data);
                $id = $value['maTU'];
                $soLuong = $value['soLuong'];
                $status = Session::data('bill_status');
                if ($status = 1 ) { 
                    $this->DrinkManageModel->purchases($id,$soLuong); 
                }
        
            } 
        }
        
        Session::flash('msg', 'Đặt hàng thành công');
        
        return $this->response->redirect('dat-hang-thanh-cong');
    
    }
}

    // public function edit($id)
    // {  
    //     $this ->AuthLogin();

    //     $data['content'] = 'admins.bill_detail.edit';

    //     $data['sub_content']['cate_by_id'] = $this -> BillDetailModel->getCateById($id);

    //     $data['page_title'] = "Chỉnh sửa loại đồ uống";

    //     return $this->view('layouts.admin_layout', $data);
        
    // }

    // public function update($id)
    // {
    //     $this ->AuthLogin();

    //     if ($this->request->isPost()){
    //         /*Set rules*/
    //         $this->request->rules([
    //             'cate_name' => 'required|min:5',
    //         ]);

    //         //Set message
    //         $this->request->message([
    //             'cate_name.required' => 'Tên loại không được để trống',
    //             'cate_name.min' => 'Tên loại phải lớn hơn 5 ký tự',

    //         ]);

    //         $validate = $this->request->validate();
    //         if (!$validate){
    //             Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
    //             return $this->response->redirect('drink-category-edit/editid-'.$id);
    //         }

    //     }
    //     // Lấy dữ liệu gửi từ form
    //     $dataFields = $this->request->getFields();
 
    //     // Đưa dữ liệu vào data
    //     $data = [
    //         'tenLoai' => $dataFields['cate_name']
    //     ];
    //     // Thêm dữ liệu vào dtb = models
    //     $this -> BillDetailModel-> edit( $id, $data);
    //     Session::flash('msg', 'Cập nhật loại đồ uống thành công');
    //     return $this->response->redirect('drink-category');
    // }
