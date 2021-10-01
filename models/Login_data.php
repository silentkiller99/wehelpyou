<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_data extends CI_Model
{

    public function adminLogin($data)
    {
        $where = "(email='$data' or phone='$data')";
        $data = $this->db->select()
            ->from('tbl_registration')
            ->where($where)
            ->get();
        return $data->result();
    }

    public function hospitalLogin($data)
    {
        $where = "(email='$data' or phone='$data')";
        $data = $this->db->select()
            ->from('tbl_hospital_registration')
            ->where($where)
            ->get();
        return $data->result_array();
    }

    public function userLogin($data)
    {
        $where = "(email='$data' or phone='$data')";
        $data = $this->db->select()
            ->from('tbl_user_registration')
            ->where($where)
            ->get();
        return $data->result_array();
    }


}
