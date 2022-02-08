<?php
class Feedback extends Controller{

    public $FeedbackModel, $ResponseStatusModel, $Mailer;
    public $request, $response;

    public function __construct(){
        $this->FeedbackModel = $this->model('FeedbackModel');
        $this->ResponseStatusModel = $this->model('ResponseStatusModel');
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
        
        $data['content'] = 'admins.feedback.index'; 
         
        $data['sub_content']['list_feedback'] = $this->FeedbackModel->getlistFeedback();

        $data['page_title'] = "Danh sách Phản Hồi và Góp Ý";

        return $this->view('layouts.admin_layout', $data);
    }

    public function add()         // view cần load ví dụ : insert
    {
        $data['content'] = 'clients.home.contact';

        $data['page_title'] = "Phản Hồi và Góp Ý";

        return $this->view('layouts.client_layout',$data);
    }

    public function edit($id)
    {  
        $data['content'] = 'admins.feedback.edit';

        $data['sub_content']['feedback_by_id'] = $this->FeedbackModel->getCateById($id);

        $data['sub_content']['tt_ph'] = $this->ResponseStatusModel->all();
        
        $data['page_title'] = "Chỉnh sửa Phản Hồi và Góp Ý"; 
        
        return $this->view('layouts.admin_layout', $data);
        
    }

    public function destroy($id)
    {
        $this->FeedbackModel->del($id);
        Session::flash('msg', 'Xóa phản hồi thành công');
        return $this->response->redirect('feedback');
    }

    public function save()
    {

        // if ($this->request->isPost()){
        //     /*Set rules*/
        //     $this->request->rules([
        //         'feedback_name' => 'required|min:5',
        //         'feedback_email' => 'required|email|unique:phanhoi:email',
        //         'feedback_title' => 'required|min:20',
        //         'feedback_content' => 'required|min:20'
        //     ]);

        //     //Set message
        //     $this->request->message([
        //         'feedback_name.required' => 'Tên người gởi không được để trống',
        //         'feedback_name.min' => 'Tên người gởi phải lớn hơn 5 ký tự',
        //         'feedback_email.required' => 'Email không được để trống',
        //         'feedback_email.email' => 'Định dạng Email không hợp lệ',
        //         'feedback_email.unique' => 'Email đã tồn tại trong hệ thống',
        //         'feedback_title.required' => 'Tiêu đề không được để trống',
        //         'feedback_title.min' => 'Mô tả phải lớn hơn 20 ký tự',
        //         'feedback_content.required' => 'Nội dung không được để trống',
        //         'feedback_content.min' => 'Nội dung phải lớn hơn 20 ký tự',
        //     ]);

        //     $validate = $this->request->validate();
        //     if (!$validate){
        //         Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
        //         return $this->response->redirect('lien-he');
        //     }
        // }
        $mailer = new Mailer();

        $dataFields = $this->request->getFields();
       
        // // Đưa dữ liệu vào data

        $data = [
            'subject' => $dataFields['feedback_title'],
            'content' => '<h3>Khách Hàng: '.$dataFields['feedback_name'].'</h3><p>Nội Dung: '.$dataFields['feedback_content'].'</p><p>Email: '.$dataFields['feedback_email'].'</p>',
        ];
      
        $mailer->sendMail('','',$data);

        return $this->response->redirect('goi-mail-thanh-cong');
        
    }

    
    public function sended(){
        
        $data['content'] = 'admins.home.sended'; 

        $data['page_title'] = "Phản Hồi và Góp Ý Thành Công";

        return $this->view('layouts.client_layout', $data);
    }


    public function update($id)
    {
        // if ($this->request->isPost()){
        //     /*Set rules*/
        //     $this->request->rules([
        //         'payment_name' => 'required|min:5|max:30',
        //         'payment_description' => 'required|min:5',
        //     ]);

        //     //Set message
        //     $this->request->message([
        //         'payment_name.required' => 'Tên phương thức thanh toán không được để trống',
        //         'payment_name.min' => 'Tên phương thức thanh toán phải lớn hơn 5 ký tự',
        //         'payment_name.min' => 'Tên phương thức thanh toán phải lớn hơn 5 ký tự',
        //         'payment_description.required' => 'Mô tả không được để trống',
        //         'payment_description.min' => 'Mô tả phải lớn hơn 5 ký tự',


        //     ]);
        //     $validate = $this->request->validate();
        //     if (!$validate) {
        //         Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
        //         return $this->response->redirect('feedback-edit/editid-'.$id);
        //     }
        // }
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        // Đưa dữ liệu vào data
        $data = [
            'maTTPH' => $dataFields['tt_ph'],
            'Update_at' => date('Y-m-d h:i:s')
        ];    

        // Thêm dữ liệu vào dtb = models
        $this->FeedbackModel->edit($id, $data);
        Session::flash('msg', 'Cập nhật Phản Hồi và Góp Ý thành công');
        return $this->response->redirect('feedback');
    }
}
