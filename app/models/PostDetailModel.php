<?php
/*
 * Kế thừa từ class Model
 *
 * */
class PostDetailModel extends Model {

    function tableFill(){
       return 'chitiet_baiviet';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'maBai';
    }

    function add($data)
    {
        $this->db->table('chitiet_baiviet')->insert($data);
    }

    function edit($maBai, $data)
    {
        $this->db->table('chitiet_baiviet')->where('maBai','=',$maBai)->update($data);
    }
    
    function del($maBai)   
    {
        $this->db->table('chitiet_baiviet')->where('maBai','=',$maBai)->delete();
    }

    function getCateById($id)
    {
        return  $this->db->table('chitiet_baiviet')->where('maBai','=',$id)->first();
    }

    

}   