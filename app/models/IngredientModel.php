<?php
/*
 * Kế thừa từ class Model
 *
 * */
class IngredientModel extends Model {

    function tableFill(){
       return 'nguyenlieu';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'maNL';
    }

    function add($data)
    {
        $this->db->table('nguyenlieu')->insert($data);
    }

    function edit($maNL, $data)
    {
        $this->db->table('nguyenlieu')->where('maNL','=',$maNL)->update($data);
    }

     
    function del($maNL)   
    {
        $this->db->table('nguyenlieu')->where('maNL','=',$maNL)->delete();
    }

    function getCateById($id)
    {
        return  $this->db->table('nguyenlieu')->where('maNL','=',$id)->first();
    }

}   