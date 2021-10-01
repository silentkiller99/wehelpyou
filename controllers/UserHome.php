<?php

class UserHome extends CI_Controller
{
    public function index()
    {
        $this->load->view('user/index');
    }

    public function viewSingleHospital($hId)
    {
        $this->load->view('user/hospital_details');
    }

    public function checkoutPage()
    {
        if ($this->session->userdata('userId') == '') {
            $this->session->set_flashdata('checkLogin', 'Please Login First');
            $this->load->view('user/booking');
        } else {
            if (count($_POST) > 0) {
                $post = $this->input->post();
                $post['create_date'] = setDate();
                $post['user_id'] = sessionId('userId');
                $post['hospital_id'] = $this->input->get('hId');
                $post['medicine_id'] = $this->input->get('mId');
                $insert = insertRow('tbl_book_appointment', $post);
                if ($insert) {
                    header('location:home');
                } else {
                    $this->load->view('user/booking');
                }
            } else {
                $this->load->view('user/booking');
            }

        }

    }

    public function orderHistory()
    {
        if ($this->session->userdata('userId') == '') {
            $this->session->set_flashdata('checkLogin', 'Please Login First');
            $this->load->view('user/order_history');
        } else {
            $this->load->view('user/order_history');
        }
    }

    public function all_hospital()
    {
        $this->load->view('user/all_hospital');
    }

    public function about_us()
    {
        $this->load->view('user/about_us');
    }

    public function history()
    {
        $this->load->view('user/history');
    }
}