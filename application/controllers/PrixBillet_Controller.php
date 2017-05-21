<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrixBillet_Controller
 *
 * @author Princia
 */
class PrixBillet_Controller extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('PrixBillet_Model');
    }
    
    //header("Access-Control-Allow-Origin:*")
    public function prixBillets($id = null) {
        if ($id != null) {
            $item = $this->PrixBillet_Model->get_prixBillet($id);
            $json = json_encode($item);
        } else {
            $items = $this->PrixBillet_Model->get_prixBillets();
            $json = json_encode($items);
        }
        echo $json;
    }
    
    public function add_prixBillet() {
        $this->load->model('PrixBillet_Model');
        $data = array(
            'roll_no' => $this->input->post('roll_no'),
            'prix' => $this->input->post('prix'),
            'date' => $this->input->post('date')
        );
        $this->PrixBillet_Model->insert($data);
        $query = $this->db->get("prixbillet");
        $data['records'] = $query->result();
        //$this->load->view('PrixBillet_view', $data);
    }

    public function update_prixBillet() {
        $this->load->model('PrixBillet_Model');
        $data = array(
            'roll_no' => $this->input->post('roll_no'),
            'prix' => $this->input->post('prix'),
            'date' => $this->input->post('date')
        );
        $old_roll_no = $this->input->post('old_roll_no');
        $this->PrixBillet_Model->update($data, $old_roll_no);
        $query = $this->db->get("prixbillet");
        $data['records'] = $query->result();
        //$this->load->view('PrixBillet_view', $data);
    }

    public function delete_prixBillet() {
        $this->load->model('PrixBillet_Model');
        $roll_no = $this->uri->segment('3');
        $this->PrixBillet_Model->delete($roll_no);
        $query = $this->db->get("prixbillet");
        $data['records'] = $query->result();
        //$this->load->view('PrixBillet_view', $data);
    }
}
