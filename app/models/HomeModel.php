<?php
/*
 * Kế thừa từ class Model
 *
 * */
class HomeModel extends Model {

    function tableFill(){
       return 'loaithucuong';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'maLoai';
    }

 

    function add($data)
    {
        $this->db->table('loaithucuong')->insert($data);
    }

    function edit($maLoai, $data)
    {
        $this->db->table('loaithucuong')->where('maLoai','=',$maLoai)->update($data);
    }

    function del($maLoai)
    {
        $this->db->table('loaithucuong')->where('maLoai','=',$maLoai)->delete();
    }

    // Sản phẩm hiển thị ở trang chủ
    function getList_1()
    {
        return  $this->db->table('thucuong')->where('maLoai', '=' , 6)->limit(3)->get();
    }

    function getList_2()
    {
        return  $this->db->table('thucuong')->where('maLoai', '=' , 8)->limit(3)->get();
    }

    function getList_3()
    {
        return  $this->db->table('thucuong')->where('maLoai', '=' , 5)->limit(3)->get();
    }

    //end Sản phẩm hiển thị ở trang chủ

    // Menu chính
    function getList_fruit()
    {
        return  $this->db->table('thucuong')->where('maLoai', '=' , 7)->get();
    }

    function getList_milk()
    {
        return  $this->db->table('thucuong')->where('maLoai', '=' , 8)->get();
    }

    function getList_smoothie()
    {
        return  $this->db->table('thucuong')->where('maLoai', '=' , 9)->get();
    }

    function getList_yakult()
    {
        return  $this->db->table('thucuong')->where('maLoai', '=' , 4)->get();
    }

    function getList_phin()
    {
        return  $this->db->table('thucuong')->where('maLoai', '=' , 5)->get();
    }

    function getList_mocha()
    {
        return  $this->db->table('thucuong')->where('maLoai', '=' , 6)->get();
    }
    
    function new_product()
    {
        return  $this->db->table('thucuong')->orderBy('maTU', 'DESC')->limit(4)->get();
    }
   
    //end Menu chính

    
    function getCateById($id)
    {
        return  $this->db->table('loaithucuong')->where('maLoai','=',$id)->first();
    }
}   