<?php
/*
 * Kế thừa từ class Model
 *
 * */
class PaymentMethodsModel extends Model {

    function tableFill(){
       return 'phuongthuc_thanhtoan';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'maPT';
    }

    function add($data)
    {
        $this->db->table('phuongthuc_thanhtoan')->insert($data);
    }

    function edit($maPT, $data)
    {
        $this->db->table('phuongthuc_thanhtoan')->where('maPT','=',$maPT)->update($data);
    }

    function del($maPT)   
    {
        $this->db->table('phuongthuc_thanhtoan')->where('maPT','=',$maPT)->delete();
    }
    function getCateById($id)
    {
        return  $this->db->table('phuongthuc_thanhtoan')->where('maPT','=',$id)->first();
    }

}   