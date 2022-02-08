<?php
/*
 * Kế thừa từ class Model
 *
 * */
class BillModel extends Model {

    function tableFill(){
       return 'hoadon';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'maHD';
    }

    function add($data)
    {
        $this->db->table('hoadon')->insert($data);
        return $this->db->LastId();
    }

    function edit($maHD, $data)
    {
        $this->db->table('hoadon')->where('maHD','=',$maHD)->update($data);
    }

    function del($maHD)   
    {
        $this->db->table('hoadon')->where('maHD','=',$maHD)->delete();
    }
    function getCateById($id)
    {
        return  $this->db->table('hoadon')->join('khachhang', 'khachhang.maKH = hoadon.maKH')->where('maHD','=',$id)->first();
    }


    public function getBill(){
        return $this->db->table('hoadon')->join('phuongthuc_thanhtoan', 'phuongthuc_thanhtoan.maPT = hoadon.maPT')->join('trangthai_hoadon', 'trangthai_hoadon.maHD = hoadon.maHD')->get();
    }

    function report_bill()
    {
        $result = $this->db->table('hoadon')->select('count(*) as total')->where('maTT','=',1)->first();
      
        if($result){
            return $result['total'];
        }
        return 0;
    }

    function report_bill_delivered()
    {
        $result = $this->db->table('hoadon')->select('count(*) as total')->where('maTT','=',3)->first();
      
        if($result){
            return $result['total'];
        }
        return 0;
    }
    function get_all_post($limit, $start)
    {
        return $this->db->table('hoadon')->join('khachhang', 'khachhang.maKH = hoadon.maKH')->join('phuongthuc_thanhtoan', 'phuongthuc_thanhtoan.maPT = hoadon.maPT')->limit($start , $limit )->get();
    }
    function count_product()
    {
        $result = $this->db->table('hoadon')->select('count(*) as total')->first();

        if($result){
            return $result['total'];
        }
        return 0;
    }

}   