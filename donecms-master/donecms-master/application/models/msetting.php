<?php

class Msetting extends CI_Model {
    var $table = "setting";
    var $id = "id";
	
	public function getAll()
    {

	   $sql = " SELECT * from ".$this->table." ";
	   
	   $result = $this->db->query($sql);
	   
	   return $result->rows;

    }

    public function delete($id)
    {

        $sql = " DELETE  from '".$this->table."' WHERE ".$this->id." = '".$id."'";

        $result = $this->db->query($sql);

        return $result->rows;

    }


    public function increment(){
        $sql = " SELECT * from ".$this->table." ";

        $result = $this->db->query($sql);
        $r =  $result->row();

        $arr = array();
        $arr['value'] =$r->value +1;
        $this->db->where('key', 'visitor');
        $this->db->update("setting",$arr);
    }

    public function getbyKey($key){
        $sql = " SELECT * from ".$this->table." WHERE `key` = '".$key."' ";

        $result = $this->db->query($sql);

        $r =  $result->row();

        return $r->value;
    }



    }