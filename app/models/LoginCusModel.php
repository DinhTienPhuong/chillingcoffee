<?php
    class LoginCusModel extends Model {

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
        public function findById($data){
            
            $sql = 'SELECT * FROM khachhang WHERE userCus = "'.$data['userCus'].'" AND pwCus = "'.$data['pwCus'].'" ';
            $result = $this->db->query($sql);
            $row = $result->rowCount();
            return $row;
        }
        public function findByUserName($userName){
            return $this->db->table('khachhang')->where('userCus','=',$userName)->first();
        }
    }
