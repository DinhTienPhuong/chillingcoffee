<?php
class Images extends Controller{

    public $ImagesModel;
    public $request, $response;

    public function __construct(){
        $this->ImagesModel = $this->model('ImagesModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function saveForPost()
    {
        // Lấy dữ liệu gửi từ form
        $dataFile = $this->request->getFiles();
        // Đưa dữ liệu vào data
        $data = [
            'maBai' => Session::data('post_id')
        ]; 

        $get_image = Session::data('img');
            
        if (!empty($get_image)) {
            $uploadPath = "public/uploads/drink_category/";
            $uniques_image = ProcessImage::checkImage($get_image, $uploadPath);
            if ($uniques_image) {
                $data['img'] = $uniques_image;
            }
        
        }
        $this->ImagesModel->add($data);
        return $this->response->redirect('post-manage');
    }
    public function updateForPost($img_id)
    { 
        $dataFile = $this->request->getFiles();
        if($dataFile!=''){  

            $get_image = Session::data('img');
            if (!empty($get_image)) {
                $uploadPath = "public/uploads/drink_category/";
                $uniques_image = ProcessImage::checkImage($get_image, $uploadPath);
                if ($uniques_image) {
                    $data['img'] = $uniques_image;
                }
            }

            $this->ImagesModel->edit($img_id, $data);
            
            return $this->response->redirect('post-manage');
        }
    }

    public function saveForProduct()
    {
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();
        // Đưa dữ liệu vào data
        $data = [
            'maTU' => Session::data('product_id')
        ]; 
        
        $get_image = Session::data('img');
      
        if (!empty($get_image)) {
            $uploadPath = "public/uploads/drink_category/";
            $uniques_image = ProcessImage::checkImage($get_image, $uploadPath);
            if ($uniques_image) {
                $data['img'] = $uniques_image;
            }
        }
        
        $this->ImagesModel->add($data);

        return $this->response->redirect('drink-manage');
    }

    public function updateForProduct($img_id)
    {
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();
        
        if($dataFile!=''){    

            $get_image =  Session::data('img');
            if (!empty($get_image)) {
                $uploadPath = "public/uploads/drink_category/";
                $uniques_image = ProcessImage::checkImage($get_image, $uploadPath);
                if ($uniques_image) {
                    $data['img'] = $uniques_image;
                }
            }
            $this->ImagesModel->edit($img_id, $data);
            
            return $this->response->redirect('drink-manage');
        }
    }


}
