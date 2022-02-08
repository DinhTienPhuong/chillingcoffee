<?php
/*
 * Kế thừa từ class Model
 *
 * */
class DrinkManageModel extends Model {

    function tableFill(){
       return 'thucuong';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'maTU';
    } 

    function add($data)
    {
        $this->db->table('thucuong')->insert($data);
        return $this->db->LastId();
    }

    function edit($maTU, $data)
    {
        $this->db->table('thucuong')->where('maTU','=',$maTU)->update($data);
    }

    function del($maTU)
    {
        $this->db->table('thucuong')->where('maTU','=',$maTU)->delete();
    }
    function getCateById($id)
    {
        return $this->db->table('thucuong')->join('hinhanh','hinhanh.maTU=thucuong.maTU')->where('thucuong.maTU','=',$id)->first();
    }
    
    // function get_cate_name($id){
    //     return $this->db->table('thucuong as a')->join('loaithucuong as b', ' a.maLoai = b.maLoai')->where('
    //     b.maLoai','=' ,$id)->orderBy('b.tenLoai',"DESC")->get();
    // }
   
    public function findByName($name){
        return $this->db->table('thucuong')->join('loaithucuong', 'loaithucuong.maLoai = thucuong.maLoai')->whereLike('tenTU', $name['tenTU'])->get();
    }
    public function getAll(){
        return $this->db->table('thucuong')->join('loaithucuong', 'loaithucuong.maLoai = thucuong.maLoai')->get();
    }

    function get_drink_detail($id)
    {
        return  $this->db->table('thucuong')->join('loaithucuong', 'loaithucuong.maLoai = thucuong.maLoai')->select('loaithucuong.tenLoai as tenLoai, tenTU, donGia, moTa, fileAnh')->where('maTU','=',$id)->first();
    }
    function product_detail($maTU){
        return  $this->db->table('thucuong')->join('loaithucuong', 'loaithucuong.maLoai = thucuong.maLoai')->select('loaithucuong.tenLoai as tenLoai,maTU, donGia, tenTU, moTa, fileAnh')->where('maTU', '=', $maTU)->first();
    }
    function featured_products()
    {
        return  $this->db->table('thucuong')->orderBy('maTU')->limit(4)->get();
    }
    public function getCategory(){
        return $this->db->table('thucuong')->join('loaithucuong', 'thucuong.maLoai = loaithucuong.maLoai')->get();
    }
    function get_all_post($limit, $start)
    {
        return $this->db->table('thucuong as a')->join('loaithucuong as b', 'a.maLoai = b.maLoai')->limit($start , $limit )->get();
    }
    function count_product()
    {
        $result = $this->db->table('thucuong')->select('count(*) as total')->first();

        if($result){
            return $result['total'];
        }
        return 0;
    }
 
    function purchases($id, $soLuong)
    {
        $sql = 'UPDATE thucuong SET luotMua = luotMua +' .$soLuong. ' WHERE maTU = ' . $id;
        $result = $this->db->query($sql);

        return $result;
    }

    function report_product()
    {
        return $this->db->table('thucuong')->where('luotMua','>',1)->limit(3)->orderBy('luotMua', 'DESC')->get();
    }

    
}   