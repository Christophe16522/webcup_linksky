<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Examples extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

    public function _example_output($output = null) {
        $this->load->view('example.php', (array) $output);
    }

    public function offices() {
        $output = $this->grocery_crud->render();

        $this->_example_output($output);
    }

    public function index() {
        $this->_example_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function user() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_language("french");
            $crud->set_theme('datatables');
            $crud->set_table('login');
            //$crud->set_subject('Office');
            //$crud->required_fields('city');
            $crud->columns('identifiant', 'motdepasse');
            $output = $crud->render();
            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function prixbillet() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_language("french");
            $crud->set_theme('datatables');
            $crud->set_table('prixbillet');
            //$crud->set_subject('Office');
            //$crud->required_fields('city');
            $crud->columns('id', 'prix','date');
            $output = $crud->render();
            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    public function prixsejour() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_language("french");
            $crud->set_theme('datatables');
            $crud->set_table('prixsejour');
            //$crud->set_subject('Office');
            //$crud->required_fields('city');
            $crud->columns('id', 'prix','date');
            $output = $crud->render();
            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    public function reservationbillet() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_language("french");
            $crud->set_theme('datatables');
            $crud->set_table('reservationbillet');
            //$crud->set_subject('Office');
            //$crud->required_fields('city');
            $crud->columns('id', 'nom','adresse','mail','sejourid','nbreplace');
            $output = $crud->render();
            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    public function reservationsejour() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_language("french");
            $crud->set_theme('datatables');
            $crud->set_table('reservationsejour');
            //$crud->set_subject('Office');
            //$crud->required_fields('city');
            $crud->columns('id', 'nbrjours','datedebut','datefin');
            $output = $crud->render();
            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    public function voteland() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_language("french");
            $crud->set_theme('datatables');
            $crud->set_table('voteland');
            //$crud->set_subject('Office');
            //$crud->required_fields('city');
            $crud->columns('id', 'monde','vote','disponibilite');
            $output = $crud->render();
            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }


}
