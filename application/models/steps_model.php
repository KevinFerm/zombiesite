<?php
//Author Joakim Danielsson
class Steps_model extends CI_Model {
    var $steps;

    public function __construct() {
    	parent::__construct();
    }

    function showStep(){
    	$query = $this->db->query("SELECT * FROM substep");
    	foreach ($query->result() as $row){
    			echo $row->title;
    			echo $row->text;
    	}



    }

    function insert_into_db(){
		$this->load->database();
		$this->db->insert("Steps", $data);

    }


}
