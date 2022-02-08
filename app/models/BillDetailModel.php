<?php
/*
 * Kế thừa từ class Model
 *
 * */
class BillDetailModel extends Model {

    function tableFill(){
       return 'chitiet_hoadon';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function add($data)
    {
        $this->db->table('chitiet_hoadon')->insert($data);
        return $this->db->LastId();
    }

    function edit($id, $data)
    {
        $this->db->table('chitiet_hoadon')->where('id','=',$id)->update($data);
    }

    function del($id)   
    {
        $this->db->table('chitiet_hoadon')->where('id','=',$id)->delete();
    }
    function getCateById($id)
    {
        return  $this->db->table('chitiet_hoadon')->where('id','=',$id)->first();
    }

    function getOrder($id)
    {
        return  $this->db->table('chitiet_hoadon')->join('hoadon','hoadon.maHD=chitiet_hoadon.maHD')->join('thucuong','thucuong.maTU=chitiet_hoadon.maTU')->where('hoadon.maHD','=',$id)->get();
    }

}   