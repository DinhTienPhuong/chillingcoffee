<?php
class Home extends Controller{

    public $home, $Cate_model, $SearchModel, $data;
    public $request, $response;

    public function __construct(){
        $this->home = $this->model('HomeModel');
        $this->Cate_model = $this->model('PostManageModel');
        $this->SearchModel = $this->model('SearchModel');
        $this->request = new Request();
        $this->response = new Response();
    }
    public function AuthLogin()
    {
        $check = Session::data('userId');
        if(empty($check)){
            return $this->response->redirect('admin');
        }
    }

    public function index(){

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = $this->loadTitle();


        $data['content'] = 'clients.home.index';

        $data['sub_content']['list_1_categories'] = $this->home->getList_1();

        $data['sub_content']['list_2_categories'] = $this->home->getList_2();

        $data['sub_content']['list_3_categories'] = $this->home->getList_3();

        $data['sub_content']['list_home_post'] = $this -> Cate_model->home_post();

        return $this->view('layouts.client_layout', $data);
        
    }
    public function search(){

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = $this->loadTitle();

        $data['content'] = 'clients.home.search';

        $data['sub_content']['list_1_categories'] = $this->home->getList_1();

        $data['sub_content']['list_2_categories'] = $this->home->getList_2();

        $data['sub_content']['list_3_categories'] = $this->home->getList_3();

        $data['sub_content']['list_home_post'] = $this->Cate_model->home_post();
          

        $dataFields = $this->request->getFields(); 

        $newData = [
            'tenTU' =>  $dataFields['drinkName']
        ];
        if($newData['tenTU'] == ""){

            $data['sub_content']['list_home_post'] = $this->Cate_model->home_post();

            return $this->view('layouts.client_layout', $data);

        }else{
            
            $data['sub_content']['list_product'] = $this->SearchModel->findByName($newData);

            $data['sub_content']['list_home_post'] = $this->Cate_model->home_post();
        }

        return $this->view('layouts.client_layout', $data);
    }

    public function about(){

        $data['content'] = 'clients.home.about';

        $data['page_title'] = "V??? Ch??ng T??i";

        return $this->view('layouts.client_layout', $data);
    }

 
    public function menu(){

        $data['content'] = 'clients.products.menu';

        $data['page_title'] = "Menu";

        $data['sub_content']['list_fruit_categories'] = $this->home->getList_fruit();

        $data['sub_content']['list_milk_categories'] = $this->home->getList_milk();

        $data['sub_content']['list_smoothie_categories'] = $this->home->getList_smoothie();

        $data['sub_content']['list_yakult_categories'] = $this->home->getList_yakult();

        $data['sub_content']['list_phin_categories'] = $this->home->getList_phin();

        $data['sub_content']['list_mocha_categories'] = $this->home->getList_mocha();

        $data['sub_content']['new_product'] = $this->home->new_product();

        return $this->view('layouts.client_layout', $data);
    }

    public function successful(){

        $data['content'] = 'clients.home.successful';

        $data['page_title'] = "?????t H??ng Th??nh C??ng";

        $data['sub_content']['new_product'] = $this->home->new_product();
        
        return $this->view('layouts.client_layout', $data);

    }

    public function loadSlider()
    {
        return $list_slider = "Slider";
    }

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'Chilling Coffee',
            'meta_desc' => 'M??? ?????u C??u Chuy???n',
            'meta_keywords' => 'cafe s???a ????, cafe d???a, b???c s??u',
            'url_canonical' => _WEB_ROOT,
            'meta_author' => 'Nhom 3',
            'image_og' => 'favicon.ico'
        ];  
    }

    public function loadTitle()
    {
        return $page_title = "Chilling Coffee - Kh??i Ngu???n C???m H???ng";
    }

    public function loadLibCSS()
    {
        return $list_css = [
            'bootstrap' => 'bootstrap.css'
        ];  
    }

    public function loadLibJS()
    {
        return $list_js = [
            'jquery' => 'jquery.js'
        ];  
    }

    public function get_user(){
        $this->data['msg'] = Session::flash('msg');
        $this->render('users/add', $this->data);
    }

    // public function post_user(){
    //     $userId = 20;
    //     $request = new Request();
    //     if ($request->isPost()){
    //         /*Set rules*/
    //         $request->rules([
    //             'fullname' => 'required|min:5|max:30',
    //             'email' => 'required|email|min:6|unique:users:email',
    //             'password' => 'required|min:3',
    //             'confirm_password' => 'required|match:password',
    //             'age' => 'required|callback_check_age'
    //         ]);

    //         //Set message
    //         $request->message([
    //             'fullname.required' => 'H??? t??n kh??ng ???????c ????? tr???ng',
    //             'fullname.min' => 'H??? t??n ph???i l???n h??n 5 k?? t???',
    //             'fullname.max' => 'H??? t??n ph???i nh??? h??n 30 k?? t???',
    //             'email.required' => 'Email kh??ng ???????c ????? tr???ng',
    //             'email.email' => '?????nh d???ng email kh??ng h???p l???',
    //             'email.min' => 'Email ph???i l???n h??n 6 k?? t???',
    //             'email.unique' => 'Email ???? t???n t???i trong h??? th???ng',
    //             'password.required' => 'M???t kh???u kh??ng ???????c ????? tr???ng',
    //             'password.min' => 'M???t kh???u ph???i l???n h??n 3 k?? t???',
    //             'confirm_password.required' => 'Nh???p l???i m???t kh???u kh??ng ???????c ????? tr???ng',
    //             'confirm_password.match' => 'M???t kh???u nh???p l???i kh??ng kh???p',
    //             'age.required' => 'Tu???i kh??ng ???????c ????? tr???ng',
    //             'age.callback_check_age' => 'Tu???i kh??ng ???????c nh??? h??n 20'
    //         ]);

    //         $validate = $request->validate();
    //         if (!$validate){
    //             Session::flash('msg', '???? c?? l???i x???y ra. Vui l??ng ki???m tra l???i');
    //         }

    //     }

    //     $response = new Response();
    //     $response->redirect('home/get_user');
    // }

    public function check_age($age){

        if ($age>=20) return true;
        return false;
    }

    public function list()
    {
        $data['content'] = 'clients.news.list';

        $data['sub_content']['new_title'] = 'Loc';

        $data['sub_content']['new_content'] = 'new_content';

        $data['sub_content']['new_author'] = 'new_author';

        return $this->view('layouts.client_layout', $data);
    }
    
}