<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VoteMonde_Controller
 *
 * @author Princia
 */
class VoteLand_Model extends CI_Model{
    function __construct() {
        parent::__construct();
    }

    public function insert($data) {
        if ($this->db->insert("voteland", $data)) {
            return true;
        }
    }

    public function delete($roll_no) {
        if ($this->db->delete("voteland", "roll_no = " . $roll_no)) {
            return true;
        }
    }

    public function update($data, $old_roll_no) {
        $this->db->set($data);
        $this->db->where("roll_no", $old_roll_no);
        $this->db->update("voteland", $data);
    }

    public function upgrade($id) {
        $req = $this->db->query("UPDATE voteland SET vote=vote+1 where id=$id");
    }
    
    
    public function get_votelands() {
        $req = $this->db->query("SELECT * FROM voteland");
        $res = $req->result();
        return $res;
    }
    
    public function get_voteland($id) {
        $req = $this->db->query("SELECT * FROM voteland where id=$id");
        $res = $req->result();
        return $res;
    }
}
