<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_Model
 *
 * @author Princia
 */
class Login_Model extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    public function insert($data) {
        if ($this->db->insert("login", $data)) {
            return true;
        }
    }

    public function delete($roll_no) {
        if ($this->db->delete("login", "roll_no = " . $roll_no)) {
            return true;
        }
    }

    public function update($data, $old_roll_no) {
        $this->db->set($data);
        $this->db->where("roll_no", $old_roll_no);
        $this->db->update("login", $data);
    }

    public function get_logins() {
        $req = $this->db->query("SELECT * FROM login");
        $res = $req->result();
        return $res;
    }
    
    public function get_login($id) {
        $req = $this->db->query("SELECT * FROM login where id=$id");
        $res = $req->result();
        return $res;
    }

}
