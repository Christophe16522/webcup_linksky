<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReservationBillet
 *
 * @author Princia
 */
class ReservationBillet_Controller extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('ReservationBillet_Model');
        $this->load->model('ReservationSejour_Model');
    }

    //header("Access-Control-Allow-Origin:*")
    public function reservationBillets($id = null) {
        if ($id != null) {
            $item = $this->ReservationBillet_Model->get_reservationBillet($id);
            $json = json_encode($item);
        } else {
            $items = $this->ReservationBillet_Model->get_reservationBillets();
            $json = json_encode($items);
        }
        echo $json;
    }
    
    public function add_reservationBillet() {
        $this->load->model('ReservationBillet_Model');
       
        $datedebut = new DateTime($this->input->get('datedebut'));
        $datefin = new DateTime($this->input->get('datefin'));
        $interval = $datedebut->diff($datefin);
        $days = $interval->format('%R%a');
        
        $sejour = array(
            'id' => null,
            'datedebut' => $this->input->get('datedebut'),
            'datefin' => $this->input->get('datefin'),
            'nbjours' => $days
        );
        
        
        $last_id = $this->ReservationSejour_Model->insert($sejour);
        $data = array(
            'id' => null,
            'nom' => $this->input->get('nom'),
            'prenom' => $this->input->get('prenom'),
            'adresse' => $this->input->get('adresse'),
            'mail' => $this->input->get('mail'),
            'sejourid' => $last_id,
            'nbreplace' => $this->input->get('nbreplace')
        );
        $this->ReservationBillet_Model->insert($data);
        
        //$query = $this->db->get("reservationbillet");
        //$data['records'] = $query->result();
        //$this->load->view('ReservationBillet_view', $data);
    }

    public function update_reservationBillet() {
        $this->load->model('ReservationBillet_Model');
        $data = array(
            'id' => $this->input->get('id'),
            'nom' => $this->input->get('nom'),
            'prenom' => $this->input->get('prenom'),
            'adresse' => $this->input->get('adresse'),
            'mail' => $this->input->get('mail'),
            'sejourid' => $this->input->get('sejourid'),
            'nbrplace' => $this->input->get('nbrsplace')
        );
        $old_id = $this->input->get('old_id');
        $this->ReservationBillet_Model->update($data, $old_id);
        $query = $this->db->get("reservationbillet");
        $data['records'] = $query->result();
        //$this->load->view('ReservationBillet_view', $data);
    }

    public function delete_reservationBillet() {
        $this->load->model('ReservationBillet_Model');
        $id = $this->uri->segment('3');
        $this->ReservationBillet_Model->delete($id);
        $query = $this->db->get("reservationbillet");
        $data['records'] = $query->result();
        //$this->load->view('ReservationBillet_view', $data);
    }
}
