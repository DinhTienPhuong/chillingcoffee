<?php
class ImagesModel extends Model {

    function tableFill(){
       return 'hinhanh';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'maHA';
    }

    function add($data)
    {
        $this->db->table('hinhanh')->insert($data);
    }

    function edit($maHA, $data)
    {
        $this->db->table('hinhanh')->where('maHA','=',$maHA)->update($data);
    }

    function del($maHA)   
    {
        $this->db->table('hinhanh')->where('maHA','=',$maHA)->delete();
    }
}   