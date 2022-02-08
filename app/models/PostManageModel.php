<?php
/*
 * Kế thừa từ class Model
 *
 * */
class PostManageModel extends Model
{

    function tableFill()
    {
        return 'baiviet';
    }

    function fieldFill()
    {
        return '*';
    }

    function primaryKey()
    {
        return 'maBai';
    }

    function add($data)
    {
        $this->db->table('baiviet')->insert($data);
        return $this->db->LastId();
    }

    function edit($maBai, $data)
    {
        $this->db->table('baiviet')->where('maBai', '=', $maBai)->update($data);
    }

    function del($maBai)
    {
        $this->db->table('baiviet')->where('maBai', '=', $maBai)->delete();
    }
    function getCateById($id)
    {
        return  $this->db->table('baiviet')->join('hinhanh','hinhanh.maBai=baiviet.maBai')->where('baiviet.maBai', '=', $id)->first();
    }

    public function getById(){

        return $this->db->table('baiviet')->join('nhavien', 'nhavien.maNV = baiviet.maNV') ->get();
    }
    // public function getPostById(){

    //     return $this->db->table('baiviet')->join('chitiet_baiviet','danhmuc_baiviet', 'chitiet_baiviet.maBai = baiviet.maBai','danhmuc_baiviet.maDanhmuc = chitiet_baiviet.maDanhmuc', 'danhmuc_baiviet.maDanhmuc = baiviet.maDanhmuc' )->get();
    // }

      public function getPostById(){

        return $this->db->table('baiviet',)->join('nhanvien', 'nhanvien.maNV = baiviet.maNV' )->join('danhmuc_baiviet', 'danhmuc_baiviet.maDanhmuc = baiviet.maDanhmuc')->get();
    }


    function home_post(){
        return  $this->db->table('baiviet')->join('nhanvien', 'nhanvien.maNV=baiviet.maNV')->limit(3)->get();
    }

    function detail_post_client($maBai){
        return $this->db->table('baiviet')->join('nhanvien', 'nhanvien.maNV=baiviet.maNV')->join('danhmuc_baiviet', 'danhmuc_baiviet.maDanhmuc = baiviet.maDanhmuc')->where('maBai', '=', $maBai)->first();
    }

    function list_post(){
        return  $this->db->table('baiviet')->join('nhanvien', 'nhanvien.maNV=baiviet.maNV')->limit(4)->get();
    }

    function blog(){
        return  $this->db->table('baiviet')->join('nhanvien', 'nhanvien.maNV=baiviet.maNV')->get();
    }   

    function get_all_post($limit, $start)
    {
        return $this->db->table('baiviet as a')->join('nhanvien as c', 'c.maNV=a.maNV')->join('danhmuc_baiviet as b', 'a.maDanhmuc = b.maDanhmuc')->limit($start , $limit )->get();
    }

    function count_post()
    {
        $result = $this->db->table('baiviet')->select('count(*) as total')->first();

        if($result){
            return $result['total'];
        }
        return 0;
    }

    function views($id)
    {
        $sql = 'UPDATE baiviet SET views = views + 1 WHERE maBai = ' . $id;
        $result = $this->db->query($sql);

        return $result;
    }


    function report_post()
    {
        return $this->db->table('baiviet')->join('danhmuc_baiviet', 'danhmuc_baiviet.maDanhmuc = baiviet.maDanhmuc')->where('views','>',0)->orderBy('views', 'DESC')->get();
    }
}
