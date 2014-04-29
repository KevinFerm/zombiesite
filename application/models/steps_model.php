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

    function insert_into_step($title, $text, $email, $id, $step){
		$this->db->query("INSERT INTO `substep` (
                        `id` ,
                        `title` ,
                        `text` ,
                        `date` ,
                        `group_id` ,
                        `user_email` ,
                        `mainstep_id` ,
                        `step_num`
                        )
                        VALUES (
                        NULL ,  '{$title}',  '{$text}', 
                        CURRENT_TIMESTAMP ,  '',  '{$email}',  '{$id}',  '{$step}'
                        );");
    }


}
