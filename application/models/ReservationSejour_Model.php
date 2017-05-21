<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReservationSejour_Model
 *
 * @author Princia
 */
class ReservationSejour_Model extends CI_Model{
    function __construct() {
        parent::__construct();
    }

    public function insert($data) {
        if ($this->db->insert("reservationsejour", $data)) {
            $insert_id = $this->db->insert_id();
            return  $insert_id;
        }
    }

    public function delete($roll_no) {
        if ($this->db->delete("reservationsejour", "roll_no = " . $roll_no)) {
            return true;
        }
    }

    public function update($data, $old_roll_no) {
        $this->db->set($data);
        $this->db->where("roll_no", $old_roll_no);
        $this->db->update("reservationSejour", $data);
    }

    public function get_reservationSejours() {
        $req = $this->db->query("SELECT * FROM reservationsejour");
        $res = $req->result();
        return $res;
    }
    
    public function get_reservationSejour($id) {
        $req = $this->db->query("SELECT * FROM reservationsejour where id=$id");
        $res = $req->result();
        return $res;
    }
}
