<?php

class HospitalData extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Kolkata");
        if ($this->session->userdata('hospitalId') == '') {
            redirect('vendorLogin');
        }
    }

    public function home()
    {

        $this->load->view('hospital/index');
    }

    public function profile()
    {
        $this->load->view('hospital/profile');
    }

    public function addName()
    {
        $id = $this->input->get('id');
        $getData = getRowById('tbl_medicine_name', 'id', $id);
        $data['medicine_name'] = set_value('medicine_name') == false ? @$getData[0]['medicine_name'] : set_value('medicine_name');
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $post['hospital_id'] = sessionId('hospitalId');
            if (isset($id)) {
                $update = updateRowById('tbl_medicine_name', 'id', $id, $post);
                if ($update) {
                    $this->session->set_flashdata('errors', 'name update successfully');
                } else {
                    $this->session->set_flashdata('errors', 'name not update ');
                }
                header('location:allName');
            } else {
                $post = $this->input->post();
                $post['hospital_id'] = sessionId('hospitalId');
                $insert = insertRow('tbl_medicine_name', $post);
                if ($insert) {
                    $this->session->set_flashdata('errors', 'name Add successfully');
                } else {
                    $this->load->view('hospital/add_name');
                }
                header('location:allName');
            }
        } else {
            $this->load->view('hospital/add_name', $data);
        }
    }

    public function allName()
    {
        $this->load->view('hospital/all_medicine_name');
    }

    public function addMedicine()
    {
        if (count($_POST) > 0) {
            if (isset($id)) {
                echo "d";
            } else {
                $post = $this->input->post();
                $post['create_date'] = setDate();
                $post['hospital_id'] = sessionId('hospitalId');

                $insert = insertRow('tbl_add_medicine', $post);
                if ($insert) {
                    $this->session->set_flashdata('errors', 'Data Add Successfully');
                } else {
                    $this->session->set_flashdata('errors', 'Data not add');
                }
                header('location:allMedicine');
            }

        } else {
            $this->load->view('hospital/add_medicine');
        }
    }

    public function allMedicine()
    {
        $this->load->view('hospital/all_medicine_details');
    }

    public function updateQuantity()
    {
        $id = $this->input->get('medicine_id');
        $medicine_id = decryptId($id);
        $a = $this->input->get('packet');
        $packet = decryptId($a);
        if (count($_POST) > 0) {
            $post['medicine_id'] = $medicine_id;
            $post['hospital_id'] = sessionId('hospitalId');
            $post['quantity'] = $this->input->post('quantity');
            $post['create_date'] = setDate();

            $insert = insertRow('tbl_history', $post);
            if ($insert) {
                redirect('allMedicine');
            } else {
                redirect('allMedicine');
            }


        } else {
            $this->load->view('hospital/update_quantity');
        }
    }

    public function allVaccine()
    {
        $this->load->view('hospital/all_vaccine_details');
    }

    public function addVeccine()
    {
        if (count($_POST) > 0) {
            if (isset($id)) {
                echo "d";
            } else {
                $post = $this->input->post();
                $post['create_date'] = setDate();
                $post['hospital_id'] = sessionId('hospitalId');

                $insert = insertRow('tbl_add_medicine', $post);
                if ($insert) {
                    $this->session->set_flashdata('errors', 'Data Add Successfully');
                } else {
                    $this->session->set_flashdata('errors', 'Data not add');
                }
                header('location:allVaccine');
            }

        } else {
            $this->load->view('hospital/add_vaccine');
        }
    }

    public function appointmentDetails()
    {
        $this->load->view('hospital/appointment_details');
    }

    public function acceptStatus()
    {
        $bookProdId = $this->input->get('b');
        $status = $this->input->get('s');
        if ($status == '1') {
            $post['status'] = '1';
        } else if ($status == '2') {
            $post['status'] = '2';
        } else if ($status == '3') {
            $post['status'] = '3';
        }
        $update = updateRowById('tbl_book_appointment', 'book_product_id', $bookProdId, $post);
        header('location:appoDetails');
    }


}