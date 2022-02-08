<?php
class Cart extends Controller{

    public $CartModel;
    public $request, $response;

    public function __construct(){
        $this->CartModel = $this->model('CartModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function show_cart()
    {   $grand_total = 0;

        if(isset($_SESSION['cart'])){
            $data['sub_content']['cart_prod'] = $_SESSION['cart'];
            foreach ($_SESSION['cart'] as $key => $value) {
                $grand_total += $value['tongTien'];
            }
        }       

        $data['content'] = 'clients.cart.show_cart';

        $data['sub_content']['grand_total'] = $grand_total;

        return $this->view('layouts.client_layout', $data);
    } 

    // gio hang ajax
    public function add_cart()
    {
        $dataField = $this->request->getFields();
        $id = $dataField['cart_product_id'];
        $qty = $dataField['cart_product_qty'];

        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['soLuong'] += $qty;
            $_SESSION['cart'][$id]['tongTien']=$_SESSION['cart'][$id]['soLuong']*$_SESSION['cart'][$id]['donGia'];
        }else{
            $subtotal = $dataField['cart_product_price'] * $dataField['cart_product_qty'];
            $item = [
                'maTU' => $dataField['cart_product_id'],
                'tenTU' => $dataField['cart_product_name'],
                'fileAnh' => $dataField['cart_product_image'],
                'donGia' => $dataField['cart_product_price'],
                'soLuong'   => $dataField['cart_product_qty'],
                'tongTien'     => $subtotal
            ];

            $_SESSION['cart'][$id] = $item;
        }
    }

    public function process_qty()
    {
        if(isset($_POST['product'])){
            $product = $_POST['product'];
            $id = $product['prod_id'];
            $qty = $product['prod_qty'];
            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['soLuong'] = $qty;
                $_SESSION['cart'][$id]['tongTien'] = $qty * $_SESSION['cart'][$id]['donGia'];
            }
        }
        echo $_SESSION['cart'][$id]['soLuong'];
    }

    public function del_cart()
    {   
        $dataField = $this->request->getFields();
        $id = $dataField['id'];
        unset($_SESSION['cart'][$id]);
    }

}
