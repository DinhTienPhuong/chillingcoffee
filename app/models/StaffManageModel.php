<?php
/*
 * Kế thừa từ class Model
 *
 * */
class StaffManageModel extends Model {

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

    function edit($maNV, $data)
    {
        $this->db->table('nhanvien')->where('maNV','=',$maNV)->update($data);
    }

    function del($maNV)   
    {
        $this->db->table('nhanvien')->where('maNV','=',$maNV)->delete();
    }
    function getCateById($id)
    {
        return  $this->db->table('nhanvien')->where('maNV','=',$id)->first();
    }

}   