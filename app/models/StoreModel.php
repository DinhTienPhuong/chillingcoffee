<?php
/*
 * Kế thừa từ class Model
 *
 * */
class StoreModel extends Model {

    function tableFill(){
       return 'chinhanh';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'maCN';
    }

    function add($data)
    {
        $this->db->table('chinhanh')->insert($data);
    }

    function edit($maCN, $data)
    {
        $this->db->table('chinhanh')->where('maCN','=',$maCN)->update($data);
    }

    function del($maCN)   
    {
        $this->db->table('chinhanh')->where('maCN','=',$maCN)->delete();
    }
    function getCateById($id)
    {
        return  $this->db->table('chinhanh')->where('maCN','=',$id)->first();
    }

}   