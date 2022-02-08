<?php
/*
 * Kế thừa từ class Model
 *
 * */
class CustomerModel extends Model {

    function tableFill(){
       return 'khachhang';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'maKH';
    }

    function add($data)
    {
        $this->db->table('khachhang')->insert($data);
    }

    function edit($maKH, $data)
    {
        $this->db->table('khachhang')->where('maKH','=',$maKH)->update($data);
    }

    
    function del($maKH)   
    {
        $this->db->table('khachhang')->where('maKH','=',$maKH)->delete();
    }

    function getCateById($id)
    {
        return  $this->db->table('khachhang')->where('maKH','=',$id)->first();
    }

    function get_all_cus($limit, $start)
    {
        return $this->db->table('khachhang')->limit($start , $limit )->get();
    }

    function count_cus()
    {
        $result = $this->db->table('baiviet')->select('count(*) as total')->first();

        if($result){
            return $result['total'];
        }
        return 0;
    }
}   