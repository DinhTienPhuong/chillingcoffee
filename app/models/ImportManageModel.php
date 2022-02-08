<?php
/*
 * Kế thừa từ class Model
 *
 * */
class ImportManageModel extends Model {

    function tableFill(){
       return 'chitiet_phieunhap';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
        
    }

    public function add($data)
    {
        $this->db->table('chitiet_phieunhap')->insert($data);
        
    }

    function edit($id, $data)
    {
        $this->db->table('chitiet_phieunhap')->where('id','=',$id)->update($data);
    }
 
    function del($id)   
    {
        $this->db->table('chitiet_phieunhap')->where('id','=',$id)->delete();
    }
    function getCateById($id)
    {
        return  $this->db->table('chitiet_phieunhap')->join('nguyenlieu', 'nguyenlieu.maNL = chitiet_phieunhap.maNL')->where('id','=',$id)->first();
    }
    public function getCategory($id){
        return $this->db->table('chitiet_phieunhap')->join('nguyenlieu', 'nguyenlieu.maNL = chitiet_phieunhap.maNL')->where('maPN','=',$id)->get();
    }
}