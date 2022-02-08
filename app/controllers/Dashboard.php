<?php 
	
	class Dashboard extends Controller
	{
        public $DrinkManageModel, $BillModel, $PostManageModel;
	    public $request, $response;

	    public function __construct(){
	        $request = new Request();
	        $response = new Response();
            $this->BillModel = $this->model('BillModel');
            $this->DrinkManageModel = $this->model('DrinkManageModel');
            $this->PostManageModel = $this->model('PostManageModel');
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

	    	$data['content'] = 'admins.dashboard';

			$data['dataMeta'] = $this->loadMetaTag();
            
            $data['sub_content']['list_product'] = $this->DrinkManageModel->report_product();

            $data['sub_content']['list_post'] = $this->PostManageModel->report_post();

            // $data['sub_content']['list_bill']  =  $this->BillModel->report_bill(); 
            
            //$data['sub_content']['list_bill_delivered']  =  $this->BillModel->report_bill_delivered(); 

            // var_dump($listBill);
            // die();

            

            //$listBillDelivered = $this->BillModel->report_bill_delivered();

    		return $this->view('layouts.admin_layout', $data);
	    }
		public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'Chilling Coffee',
            'meta_desc' => 'Mở Đầu Câu Chuyện',
            'meta_keywords' => 'cafe sữa đá, cafe dừa, bạc sĩu',
            'url_canonical' => _WEB_ROOT,
            'meta_author' => 'Nhom 3',
            'image_og' => 'favicon.png'
        ];  
    }

	}
	
 ?>