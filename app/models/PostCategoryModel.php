<?php
/*
 * Kế thừa từ class Model
 *
 * */
class PostCategoryModel extends Model
{

    function tableFill()
    {
        return 'danhmuc_baiviet';
    }

    function fieldFill()
    {
        return '*';
    }

    function primaryKey()
    {
        return 'maDanhmuc';
    }

    function add($data)
    {
        $this->db->table('danhmuc_baiviet')->insert($data);
    }

    function edit($maDanhmuc, $data)
    {
        $this->db->table('danhmuc_baiviet')->where('maDanhmuc', '=', $maDanhmuc)->update($data);
    }

    function del($maDanhmuc)
    {
        $this->db->table('danhmuc_baiviet')->where('maDanhmuc', '=', $maDanhmuc)->delete();
    }
    function getCateById($id)
    {
        return  $this->db->table('danhmuc_baiviet')->where('maDanhmuc', '=', $id)->first();
    }
    public function getPostCateById()
    {
        return $this->db->table('danhmuc_baiviet',)->join('chitiet_baiviet', 'danhmuc_baiviet.maDanhmuc = chitiet_baiviet.maDanhmuc')->get();
    }
}
