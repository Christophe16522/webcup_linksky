<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrixSejour_Controller
 *
 * @author Princia
 */
class PrixSejour_Controller extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('PrixSejour_Model');
    }
    
    //header("Access-Control-Allow-Origin:*")
    public function prixSejours($id = null) {
        if ($id != null) {
            $item = $this->PrixSejour_Model->get_prixSejour($id);
            $json = json_encode($item);
        } else {
            $items = $this->PrixSejour_Model->get_prixSejours();
            $json = json_encode($items);
        }
        echo $json;
    }
    
    public function add_prixSejour() {
        $this->load->model('PrixSejour_Model');
        $data = array(
            'roll_no' => $this->input->post('roll_no'),
            'prix' => $this->input->post('prix'),
            'date' => $this->input->post('date')
        );
        $this->PrixSejour_Model->insert($data);
        $query = $this->db->get("prixsejour");
        $data['records'] = $query->result();
        //$this->load->view('PrixSejour_view', $data);
    }

    public function update_prixSejour() {
        $this->load->model('PrixSejour_Model');
        $data = array(
            'roll_no' => $this->input->post('roll_no'),
            'prix' => $this->input->post('prix'),
            'date' => $this->input->post('date')
        );
        $old_roll_no = $this->input->post('old_roll_no');
        $this->PrixSejour_Model->update($data, $old_roll_no);
        $query = $this->db->get("prixsejour");
        $data['records'] = $query->result();
        //$this->load->view('PrixSejour_view', $data);
    }

    public function delete_prixSejour() {
        $this->load->model('PrixSejour_Model');
        $roll_no = $this->uri->segment('3');
        $this->PrixSejour_Model->delete($roll_no);
        $query = $this->db->get("prixsejour");
        $data['records'] = $query->result();
        //$this->load->view('PrixSejour_view', $data);
    }
}
