<?php

    class Project_m extends CI_model{
       
       
       public function save_data($data)
       {
           $spInsertdata="CALL spInsertdata(?,?,?,?,?)";
           $this->db->query($spInsertdata,$data);

        // $this->db->insert('student',$data);
       }

    }

?>