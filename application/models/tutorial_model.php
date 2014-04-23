<?php
class Tutorial_Model extends CI_Model {

    public function __construct() {

    }

    function getTutorial(){
    	return $this->db->query("SELECT * FROM tutorial WHERE child='0'")->result_array();
    }

    function getSlide($id,$num){
    	return $this->db->query("SELECT * FROM tutorial WHERE child='{$id}' AND slidenum='{$num}'")->result_array();
    }

    function addTutorial($title,$text)
    {
    	$this->db->query("INSERT INTO tutorial (id,child,slidenum,title,text) VALUES (null,0,0,'{$title}','{$text}')");
    }

    function addSlide($id,$num,$title,$text)
    {
    	$this->db->query("INSERT INTO tutorial (id,child,slidenum,title,text) VALUES (null,'{$id}','{$num}','{$title}','{$text}')");
    }


}
