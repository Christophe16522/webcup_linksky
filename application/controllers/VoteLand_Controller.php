<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VoteLand_Controller
 *
 * @author Princia
 */
class VoteLand_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('VoteLand_Model');
    }

    //header("Access-Control-Allow-Origin:*")
    public function voteLand($id = null) {
        header("Access-Control-Allow-Origin:*");
        if ($id != null) {
            $item = $this->VoteLand_Model->get_voteLand($id);
            $json = json_encode($item);
        } else {
            $items = $this->VoteLand_Model->get_voteLands();
            $json = json_encode($items);
        }
        echo $json;
    }

    public function add_voteLand() {
        header("Access-Control-Allow-Origin:*");
        $this->load->model('VoteLand_Model');
        $data = array(
            'id' => null,
            'monde' => $this->input->get('monde'),
            'vote' => 1,
            'disponibilite' => 1
        );
        if ($this->VoteLand_Model->insert($data)) {
            $query = $this->db->get("voteland");
            $items = $query->result();
            $json = json_encode($items);
            echo $json;
        }

        //$this->load->view('VoteLand_view', $data);
    }

    public function upgrade_voteLand() {
        header("Access-Control-Allow-Origin:*");
        $this->load->model('VoteLand_Model');
        $id = $this->input->get('id');
        $this->VoteLand_Model->upgrade($id);
        $query = $this->db->get("voteland");
        $items = $query->result();
        $json = json_encode($items);
        echo $json;
    }

    public function update_voteLand() {
        $this->load->model('VoteLand_Model');
        $data = array(
            'id' => $this->input->get('id'),
            'monde' => $this->input->get('monde'),
            'vote' => $this->input->get('vote'),
            'disponibilite' => $this->input->get('disponibilite')
        );
        $old_id = $this->input->get('old_id');
        $this->VoteLand_Model->update($data, $old_id);
        $query = $this->db->get("voteland");
        $data['records'] = $query->result();
        //$this->load->view('VoteLand_view', $data);
    }

    public function delete_voteLand() {
        $this->load->model('VoteLand_Model');
        $id = $this->uri->segment('3');
        $this->VoteLand_Model->delete($id);
        $query = $this->db->get("voteland");
        $data['records'] = $query->result();
        //$this->load->view('VoteLand_view', $data);
    }

}
