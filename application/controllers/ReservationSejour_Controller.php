<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReservationSejour
 *
 * @author Princia
 */
class ReservationSejour_Controller extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('ReservationSejour_Model');
    }

    //header("Access-Control-Allow-Origin:*")
    public function reservationSejours($id = null) {
        if ($id != null) {
            $item = $this->ReservationSejour_Model->get_reservationSejour($id);
            $json = json_encode($item);
        } else {
            $items = $this->ReservationSejour_Model->get_reservationSejours();
            $json = json_encode($items);
        }
        echo $json;
    }
    
    public function add_reservationSejour() {
        $this->load->model('ReservationSejour_Model');
        $data = array(
            'roll_no' => $this->input->post('roll_no'),
            'ngjours' => $this->input->post('nbjours'),
            'datedebut' => $this->input->post('datedebut'),
            'datefin' => $this->input->post('datefin')
        );
        $this->ReservationSejour_Model->insert($data);
        $query = $this->db->get("reservationsejour");
        $data['records'] = $query->result();
        //$this->load->view('ReservationSejour_view', $data);
    }

    public function update_reservationSejour() {
        $this->load->model('ReservationSejour_Model');
        $data = array(
            'roll_no' => $this->input->post('roll_no'),
            'ngjours' => $this->input->post('nbjours'),
            'datedebut' => $this->input->post('datedebut'),
            'datefin' => $this->input->post('datefin')
        );
        $old_roll_no = $this->input->post('old_roll_no');
        $this->ReservationSejour_Model->update($data, $old_roll_no);
        $query = $this->db->get("reservationsejour");
        $data['records'] = $query->result();
        //$this->load->view('ReservationSejour_view', $data);
    }

    public function delete_reservationSejour() {
        $this->load->model('ReservationSejour_Model');
        $roll_no = $this->uri->segment('3');
        $this->ReservationSejour_Model->delete($roll_no);
        $query = $this->db->get("reservationsejour");
        $data['records'] = $query->result();
        //$this->load->view('ReservationSejour_view', $data);
    }
}
