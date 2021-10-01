<?php

class HomePage extends CI_Controller
{
    public function adminDashboard()
    {
        $this->load->view('admin/index');
    }

    public function user()
    {
        $this->load->view('admin/user_all');
    }

    public function hospital()
    {
        $this->load->view('admin/merchants_all');
    }
}