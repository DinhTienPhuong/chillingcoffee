<?php
class Ingredient extends Controller{

    public $IngredientModel;
    public $request, $response;

    public function __construct(){
        $this->IngredientModel = $this->model('IngredientModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index(){
            
        $data['content'] = 'admins.ingredient.index'; 

         
        $data['sub_content']['list_ingredient'] = $this->IngredientModel->all();


        $data['page_title'] = "Danh sách Nguyên Liệu";

        return $this->view('layouts.admin_layout', $data);
    }

    public function add()       
    {
        $data['content'] = 'admins.ingredient.add';

        $data['sub_content']['list_ingredient'] = $this->IngredientModel->all();

        $data['page_title'] = "Thêm Nguyên Liệu";

        return $this->view('layouts.admin_layout', $data);
    }

    public function edit($id)
    {  
        $data['content'] = 'admins.ingredient.edit';

        $data['sub_content']['ingredient_by_id'] = $this -> IngredientModel->getCateById($id);

        $data['page_title'] = "Cập Nhật Nguyên Liệu";

        return $this->view('layouts.admin_layout', $data);
        
    }

    
    public function destroy($id)
    {
        $this->IngredientModel->del($id);
        Session::flash('msg', 'Xóa nguyên liệu thành công');
        return $this->response->redirect('ingredient');
    }


    public function save()
    {
        if ($this->request->isPost()) {
            /*Set rules*/
            $this->request->rules([
                'ingredient_name' => 'required|min:5',
                'ingredient_description' => 'required|min:6'
            ]);

            //Set message
            $this->request->message([
                'ingredient_name.required' => 'Tên nguyên liệu không được để trống',
                'ingredient_name.min' => 'Tên nguyên liệu phải lớn hơn 5 ký tự',
                'ingredient_description.required' => 'Mô tả không được để trống',
                'ingredient_description.min' => 'Mô tả phải lớn hơn 6 ký tự'
            ]);
            $validate = $this->request->validate();
            if (!$validate) {
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('ingredient-add');
            }
        }
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();

        // Đưa dữ liệu vào data
        $data = [
            'tenNL' => $dataFields['ingredient_name'],
            'moTa' => $dataFields['ingredient_description']
        ];

        // Thêm dữ liệu vào dtb = models
        $this->IngredientModel->add($data);
        Session::flash('msg', 'Thêm nguyên liệu thành công');
        return $this->response->redirect('ingredient');
    }

    public function update($id)
    {
        if ($this->request->isPost()) {
            /*Set rules*/
            $this->request->rules([
                'ingredient_amount' => 'required|min:1',
                'ingredient_start' => 'required',
                'ingredient_end' => 'required|callback_check_date',
            ]);

            //Set message
            $this->request->message([
                'ingredient_amount.required' => 'Tên nguyên liệu không được để trống',
                'ingredient_amount.min' => 'Tên nguyên liệu phải lớn hơn 5 ký tự',
                'ingredient_start.required' => 'Ngày Sản Xuất không được để trống',
                'ingredient_end.required' => 'Ngày hết hạn không được để trống',
                'ingredient_end.callback_check_date' => 'Ngày hết hạn không được nhỏ hơn ngày sản xuất'
            ]);
            $validate = $this->request->validate();
            if (!$validate) {
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
                return $this->response->redirect('ingredient-edit/editid-' . $id);
            }
        }
        // Lấy dữ liệu gửi từ form
        $dataFields = $this->request->getFields();


        // Đưa dữ liệu vào data
        $data = [
            'soLuong' => $dataFields['ingredient_amount'],
            'ngaySX' => $dataFields['ingredient_start'],
            'ngayHH' => $dataFields['ingredient_end']

        ];


        $this->IngredientModel->edit($id, $data);
        Session::flash('msg', 'Cập nhật nguyên liệu thành công');
        return $this->response->redirect('ingredient');
    }
    public function check_date($ingredient_end)
    {
        $dataFields = $this->request->getFields();
        $ingredient_start = strtotime($dataFields['ingredient_start']);

        $ingredient_end = strtotime($ingredient_end);

        if($ingredient_start >= $ingredient_end){
            return false;
        }
        return true ;
    }
}


