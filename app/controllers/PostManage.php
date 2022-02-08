<?php
class PostManage extends Controller
{

    public $PostManageModel, $StaffManageModel, $PostCategoryModel;
    public $response, $data;

    public function __construct()
    {
        $this->PostManageModel = $this->model('PostManageModel');
        $this->StaffManageModel = $this->model('StaffManageModel');
        $this->PostCategoryModel = $this->model('PostCategoryModel');
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

        $data['content'] = 'admins.post_manage.index';

        $current_page = 1;
       
        $blogTotal = $this -> PostManageModel->count_post(); 

        $blogOnePage = 3 ; 

        $pageTotal = ceil($blogTotal / $blogOnePage);

        $limit = ($current_page - 1) * $blogOnePage;

        $data['sub_content']['list_post'] = $this->PostManageModel->get_all_post($limit , $blogOnePage); 

        $data['sub_content']['current_page'] = $current_page;

        $data['sub_content']['pageTotal'] = $pageTotal;

        $data['page_title'] = "Danh sách bài viết";

        return $this->view('layouts.admin_layout', $data);
    }

    public function post_pages($page){

        $this ->AuthLogin();
        
        $current_page = $page;

        $data['content'] = 'admins.post_manage.index';
       
        $blogTotal = $this -> PostManageModel->count_post(); 

        $blogOnePage = 3 ; 

        $pageTotal = ceil($blogTotal / $blogOnePage);

        $limit = ($current_page - 1) * $blogOnePage;

        $data['sub_content']['list_post'] = $this->PostManageModel->get_all_post($limit , $blogOnePage); 

        $data['sub_content']['current_page'] = $current_page;

        $data['sub_content']['pageTotal'] = $pageTotal;

        $data['page_title'] = "Danh sách bài viết";

        return $this->view('layouts.admin_layout', $data);
     }
 

    public function add()     
    {
        $this->AuthLogin();

        $data['content'] = 'admins.post_manage.add';

        $data['sub_content']['list_manage'] = $this->StaffManageModel->all();

        $data['sub_content']['list_cate_post'] = $this->PostCategoryModel->all();

        $data['page_title'] = "Thêm bài viết";

        return $this->view('layouts.admin_layout', $data);
    }

    public function save()
    {
        $this->AuthLogin();

        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'title_post' => 'required',
                'introduce_post' => 'required',
                'content_post' => 'required',
            ]);

            //Set message
            $this->request->message([
                'title_post.required' => 'Tiêu đề không được để trống',
                'introduce_post.required' => 'Giới thiệu không được để trống',
                'content_post.required' => 'Nội dung không được để trống',
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('post-manage-add');
            }

        }

        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        // Đưa dữ liệu vào data
        $data = [
            'maNV' => $dataFields['name_staff_post'],
            'maDanhmuc' => $dataFields['cate_post'],
            'tieuDe' => $dataFields['title_post'],
            'gioiThieu' => $dataFields['introduce_post'],
            'noiDung' => $dataFields['content_post'],
            'start_date' => date('Y-m-d')
        ];
    
        // Thêm dữ liệu vào dtb = models
        $id = $this->PostManageModel->add($data);
        
        Session::data('post_id', $id);
        Session::data('img', $dataFile['thumbnail_post']);
        Session::flash('msg', 'Thêm bài viết thành công');
        return $this->response->redirect('them-anh');
    }

    public function edit($id)
    {
        $this->AuthLogin();

        $data['content'] = 'admins.post_manage.edit';

        $data['sub_content']['list_manage'] = $this->StaffManageModel->all();

        $data['sub_content']['list_cate_post'] = $this->PostCategoryModel->all();

        $data['sub_content']['post_edit_id'] = $this->PostManageModel->getCateById($id);

        $data['page_title'] = "Chỉnh sửa bài viết";

        return $this->view('layouts.admin_layout', $data);
    }

    public function update($id)
    {
        $this->AuthLogin();
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'title_post' => 'required',
                'introduce_post' => 'required',
                'content_post' => 'required',
            ]);

            //Set message
            $this->request->message([
                'title_post.required' => 'Tiêu đề không được để trống',
                'introduce_post.required' => 'Giới thiệu không được để trống',
                'content_post.required' => 'Nội dung không được để trống',
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('sua-anh-edit/editid-'.$id);
            }

        }
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        // Đưa dữ liệu vào data
        $data = [
            'maNV' => $dataFields['name_staff_post'],
            'maDanhmuc' => $dataFields['cate_post'],
            'tieuDe' => $dataFields['title_post'],
            'gioiThieu' => $dataFields['introduce_post'],
            'noiDung' => $dataFields['content_post'],
            'start_date' => date('Y-m-d')
        ];
        $img_id = $dataFields['img_id'];
        // Thêm dữ liệu vào dtb = models
       
        $this->PostManageModel->edit($id, $data);
        Session::data('img', $dataFile['thumbnail_post']);
        Session::flash('msg', 'Sửa bài viết thành công');
        return $this->response->redirect('sua-anh-edit/editid-'.$img_id);
    }
    public function destroy($id)
    {
        $this->AuthLogin();
        $this->PostManageModel->del($id);
        Session::flash('msg', 'Xóa bài viết thành công');
        return $this->response->redirect('post-manage');
    }


    public function detail($id){
        $data['content'] = 'clients.news.detail_post';
        $postId = $id;
        $module_name = 'baiviet';
        $sessionKey = $module_name.'_'.$postId;
        $sessionView = $_SESSION[$sessionKey];
        if (!$sessionView) { 
            $_SESSION[$sessionKey] = 1; 
            $this->PostManageModel->views($postId); 
        }

        $data['sub_content']['post_client'] = $this->PostManageModel->detail_post_client($id);

        $data['sub_content']['list_post'] = $this -> PostManageModel->list_post();

        $data['page_title'] = "Chi Tiết Bài Viết";

        return $this->view('layouts.client_layout', $data);
    }


    public function blog(){

        $data['content'] = 'clients.news.blog';

        $current_page = 1;
       
        $blogTotal = $this -> PostManageModel->count_post(); 

        $blogOnePage = 3 ; 

        $pageTotal = ceil($blogTotal / $blogOnePage);

        $limit = ($current_page - 1) * $blogOnePage;

        $data['sub_content']['list_post'] = $this->PostManageModel->get_all_post($limit , $blogOnePage); 

        $data['sub_content']['current_page'] = $current_page;

        $data['sub_content']['pageTotal'] = $pageTotal;

        $data['page_title'] = "Tin tức Khuyến mãi";
        
        return $this->view('layouts.client_layout', $data);
    }

    public function client_post_pages($page){
        
        $current_page = $page;

        $data['content'] = 'clients.news.blog';
       
        $blogTotal = $this -> PostManageModel->count_post(); 

        $blogOnePage = 3; 

        $pageTotal = ceil($blogTotal / $blogOnePage);

        $limit = ($current_page - 1) * $blogOnePage;

        $data['sub_content']['list_post'] = $this->PostManageModel->get_all_post($limit , $blogOnePage); 

        $data['sub_content']['current_page'] = $current_page;

        $data['sub_content']['pageTotal'] = $pageTotal;

        $data['page_title'] = "Tin tức Khuyến mãi";
        
        return $this->view('layouts.client_layout', $data);
    
    }
}
