<?php
/*
 * Kế thừa từ class Model
 *
 * */
class DrinkCategoryModel extends Model {

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
    function getCateById($id)
    {
        return  $this->db->table('loaithucuong')->where('maLoai','=',$id)->first();
    }
   
}   