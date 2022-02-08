<?php
/*
 * Kế thừa từ class Model
 *
 * */
class SearchModel extends Model {

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
        return  $this->db->table('thucuong')->where('maTU','=',$id)->first();
    }
    
    // function get_cate_name($id){
    //     return $this->db->table('thucuong as a')->join('loaithucuong as b', ' a.maLoai = b.maLoai')->where('
    //     b.maLoai','=' ,$id)->orderBy('b.tenLoai',"DESC")->get();
    // }
    public function findByName($name){
        return $this->db->table('thucuong')->whereLike('tenTU', $name['tenTU'])->limit(8)->get();
    }
    public function getAll(){
        return $this->db->table('thucuong')->join('loaithucuong', 'loaithucuong.maLoai = thucuong.maLoai')->get();
    }


}   