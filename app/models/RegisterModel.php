<?php
/*
 * Kế thừa từ class Model
 *
 * */
class RegisterModel extends Model {

    function tableFill(){
       return 'nhanvien';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'maNV';
    }

    function add($data)
    {
        $this->db->table('nhanvien')->insert($data);
    }

    function getCateById($id)
    {
        return  $this->db->table('nhanvien')->where('maNV','=',$id)->first();
    }

}   