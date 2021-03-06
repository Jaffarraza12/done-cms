<?php

class MDegree extends CI_Model {

    var $entity = 'degree';
    var $entityID = 'degree_id';


    function add($data)
    {


        $arr = array (
            'name' => $data['name'],

        );


        if ($this->db->insert($this->entity, $arr))
        {
            return 1;
        }
        else
        {
            return 0;
        }


    }


    function edit($data,$id)
    {
        $arr = array(
             'name' => $data['name'] ,
        );

        $this->db->where($this->entityID,$id);
        if($this->db->update($this->entity, $arr)){
            return 1;
        } else {
            return 0;
        }

    }

    function GetAll()
    {
        $q = "SELECT *  FROM `$this->entity` d";
        $results = $this->db->query($q);
        return $results;
    }

    function GetById($id)
    {
        $q = "SELECT *  FROM `".$this->entity."` d WHERE  d.".$this->entityID." = '".$id."'";

        $results = $this->db->query($q);

        return $results;
    }

    function Delete($id)
    {

        $this->db->where($this->entityID, $id);
        if ($this->db->delete($this->entity))
        {
            return 1;

        } else {
            return 0;
        }
    }

  
}