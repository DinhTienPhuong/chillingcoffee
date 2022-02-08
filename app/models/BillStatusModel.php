<?php
/*
 * Kế thừa từ class Model
 *
 * */
class BillStatusModel extends Model {

    function tableFill(){
       return 'trangthai_hoadon';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'maTT';
    }

    function add($data)
    {
        $this->db->table('trangthai_hoadon')->insert($data);
    }

    function edit($maTT, $data)
    {
        $this->db->table('trangthai_hoadon')->where('maHD','=',$maTT)->update($data);
    }

    function del($maTT)   
    {
        $this->db->table('trangthai_hoadon')->where('maTT','=',$maTT)->delete();
    }

    function status($maHD)   
    {
        return $this->db->table('trangthai_hoadon')->join('hoadon', 'hoadon.maHD = trangthai_hoadon.maHD')->where('trangthai_hoadon.maHD','=',$maHD)->get();

    }

    function add_status($id,$data)
    {
        $sql = 'INSERT INTO `trangthai_hoadon`( `MaHD`, `tenTT`) VALUES ("'.$id.'","'.$data.'")';
        
        $result = $this->db->query($sql);
        return $result;
       
    }
}   