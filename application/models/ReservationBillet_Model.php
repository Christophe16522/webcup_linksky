<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReservationBillet_Model
 *
 * @author Princia
 */
class ReservationBillet_Model extends CI_Model{
    function __construct() {
        parent::__construct();
    }

    public function insert($data) {
        if ($this->db->insert("reservationbillet", $data)) {
            return true;
        }
    }

    public function delete($roll_no) {
        if ($this->db->delete("reservationbillet", "roll_no = " . $roll_no)) {
            return true;
        }
    }

    public function update($data, $old_roll_no) {
        $this->db->set($data);
        $this->db->where("roll_no", $old_roll_no);
        $this->db->update("reservationBillet", $data);
    }

    public function get_reservationBillets() {
        $req = $this->db->query("SELECT * FROM reservationbillet");
        $res = $req->result();
        return $res;
    }
    
    public function get_reservationBillet($id) {
        $req = $this->db->query("SELECT * FROM reservationbillet where id=$id");
        $res = $req->result();
        return $res;
    }
}
