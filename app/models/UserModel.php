<?php
/*
 * Kế thừa từ class Model
 *
 * */
class UserModel extends Model {

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

    function edit($maLoai, $data)
    {
        $this->db->table('nhanvien')->where('maLoai','=',$maLoai)->update($data);
    }
    public function findById($data){
        
        $sql = 'SELECT * FROM nhanvien WHERE userNV = "'.$data['userNV'].'" AND pwNV = "'.$data['pwNV'].'" ';
        $result = $this->db->query($sql);
        $row = $result->rowCount();
        return $row;
    }
    public function findByUserName($userName){
        return $this->db->table('nhanvien')->where('userNV','=',$userName)->first();
    }

}   