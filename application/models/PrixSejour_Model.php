<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrixSejour_Model
 *
 * @author Princia
 */
class PrixSejour_Model extends CI_Model{
    function __construct() {
        parent::__construct();
    }

    public function insert($data) {
        if ($this->db->insert("prixsejour", $data)) {
            return true;
        }
    }

    public function delete($roll_no) {
        if ($this->db->delete("prixsejour", "roll_no = " . $roll_no)) {
            return true;
        }
    }

    public function update($data, $old_roll_no) {
        $this->db->set($data);
        $this->db->where("roll_no", $old_roll_no);
        $this->db->update("prixsejour", $data);
    }

    public function get_prixSejours() {
        $req = $this->db->query("SELECT * FROM prixsejour");
        $res = $req->result();
        return $res;
    }
    
    public function get_prixSejour($id) {
        $req = $this->db->query("SELECT * FROM prixsejour where id=$id");
        $res = $req->result();
        return $res;
    }
}
