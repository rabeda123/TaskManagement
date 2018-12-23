<?php
/**
 * Created by PhpStorm.
 * User: bd
 * Date: 20/12/2017
 * Time: 00:03
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model {



    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

   public function getAllTasks()
   {
       
       $q='select t.* , 
            case t.task_status 
                when 0 then "remaining" 
                else "completed" 
            end as task_status_name 
          from tasks t order by t.created_on';
      return $this->db->query($q)->result();
   }

   public function getTasksByStatus(){

      $q='select count(*) as tasks_count , t.task_status from tasks t group by t.task_status';
   		return $this->db->query($q)->result();
   }

   public function insertNewTask($task_name)
   {

        $result = new stdclass();
        $result->status = 1;
        $result->message = "Task Created Success";
        $q="select * from tasks where task_name = '$task_name' ";
        $query = $this->db->query($q);
        if ($query->num_rows() > 0){
            $result->status = 2;
            $result->message = "Task exsist";
        }
        else{
            $task_details = array(
            'task_name' => $task_name
            );
            $this->db->insert('tasks', $task_details);
            if ( $this->db->affected_rows() != 1 ){
                $result->status = 3;
                $result->message = "DB ERROR";
            }

        }
       
        return $result;
   }

   public function updateTask($task_id,$task_name = '',$task_status = '')
   {

   		$result = new stdclass();
		  $task_details = array();
   		$task_details['task_name'] = $task_name;
   		$task_details['task_status'] = $task_status;
   		
		  $this->db->trans_start();
		  $this->db->where('task_id', $task_id);
      $this->db->update('tasks', $task_details);
      $this->db->trans_complete();
      if ($this->db->trans_status() === FALSE){
	      $result->status = false;
        $result->message = "error";
	    }
	    else{
		    $result->status = true;
    	  $result->message = "task updated";
	    }
      return $result;
   }

   public function deleteTask($task_id) {

      $this->db->where('task_id', $task_id);
      return $this->db->delete('tasks');

   }

}