<?php
class BillStatus extends Controller
{

    public $BillStatusModel;
    public $request, $response;

    public function __construct(){
        $this->BillStatusModel = $this->model('BillStatusModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function save()
    {
        $data = [
            'tenTT' => 'Chờ Xác Nhận',
            'maHD' => Session::data('bill_id')
        
        ];
       
        $this->BillStatusModel->add($data);
        
        Session::flash('msg', 'Đặt hàng thành công');
        
        return $this->response->redirect('bill-detail-save');
    }

    public function update($id)
    {
        $dataFields = $this->request->getFields();
        // Đưa dữ liệu vào data
        $data = Session::data('bill_status');
        
        $this->BillStatusModel->add_status($id,$data);

        return $this->response->redirect('bill-manage');
    }
}