<?php
/*
 * Kế thừa từ class Model
 *
 * */
class ImportCategoryModel extends Model {

    function tableFill(){
       return 'phieunhap';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'maPN';
    }

    public function add($data)
    {
        $this->db->table('phieunhap')->insert($data);
        return $this->db->lastId();
        
    }

    function edit($maPN, $data)
    {
        $this->db->table('phieunhap')->where('maPN','=',$maPN)->update($data);
    }
 
    function del($maPN)   
    {
        $this->db->table('phieunhap')->where('maPN','=',$maPN)->delete();
    }
    function getCateById($id)
    {
        return  $this->db->table('phieunhap')->where('maPN','=',$id)->first();
    }
    public function getCategory(){
        return $this->db->table('phieunhap')->join('nhacungcap', 'nhacungcap.maNCC = phieunhap.maNCC')->join('nhanvien', 'nhanvien.maNV = phieunhap.maNV')->join('chinhanh', 'chinhanh.maCN = phieunhap.maCN')->get();
    }
 

    // public function getCategory(){
    //     return $this->db->table('phieunhap')->join('nhacungcap', 'nhacungcap.maNCC = phieunhap.maNCC')->join('nhanvien', 'nhanvien.maNV = phieunhap.maNV')->join('chinhanh', 'chinhanh.maCN = phieunhap.maCN')->select('nhanvien.maNV as maNV, tenNV,chinhanh.maCN as maCN, tenCN, nhacungcap.maNCC as maNCC, tenNCC, phieunhap.Create_at as Create_at')->get();
    // }
}   