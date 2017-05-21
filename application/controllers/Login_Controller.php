<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Princia
 */
class Login_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Login_Model');
    }

    //header("Access-Control-Allow-Origin:*")
    public function logins($id = null) {
        if ($id != null) {
            $item = $this->Login_Model->get_login($id);
            $json = json_encode($item);
        } else {
            $items = $this->Login_Model->get_logins();
            $json = json_encode($items);
        }
        echo $json;
    }
    
    public function add_login() {
        $this->load->model('Login_Model');
        $data = array(
            'roll_no' => $this->input->post('roll_no'),
            'identifiant' => $this->input->post('identifiant'),
            'motdepasse' => $this->input->post('motdepasse')
        );
        $this->Login_Model->insert($data);
        $query = $this->db->get("login");
        $data['records'] = $query->result();
        //$this->load->view('Login_view', $data);
    }

    public function update_login() {
        $this->load->model('Login_Model');
        $data = array(
            'roll_no' => $this->input->post('roll_no'),
            'identifiant' => $this->input->post('identifiant'),
            'motdepasse' => $this->input->post('motdepasse')
        );
        $old_roll_no = $this->input->post('old_roll_no');
        $this->Login_Model->update($data, $old_roll_no);
        $query = $this->db->get("login");
        $data['records'] = $query->result();
        //$this->load->view('Login_view', $data);
    }

    public function delete_login() {
        $this->load->model('Login_Model');
        $roll_no = $this->uri->segment('3');
        $this->Login_Model->delete($roll_no);
        $query = $this->db->get("login");
        $data['records'] = $query->result();
        //$this->load->view('Login_view', $data);
    }

}
