<?php
/*
 * Kế thừa từ class Model
 *
 * */
class SupplierModel extends Model {

    function tableFill(){
       return 'nhacungcap';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'maNCC';
    }

    function add($data)
    {
        $this->db->table('nhacungcap')->insert($data);
    }

    function edit($maNCC, $data)
    {
        $this->db->table('nhacungcap')->where('maNCC','=',$maNCC)->update($data);
    }

    function del($maNCC)   
    {
        $this->db->table('nhacungcap')->where('maNCC','=',$maNCC)->delete();
    }
    function getCateById($id)
    {
        return  $this->db->table('nhacungcap')->where('maNCC','=',$id)->first();
    }

}   