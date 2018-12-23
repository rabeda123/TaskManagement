<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('task_model');
    }

    public function getAllTasks(){ // first page and only page

        $data['title'] = 'Tasks_Management';
        $data['tasks'] = $this->task_model->getAllTasks();
        $data['tasks_by_status'] = $this->task_model->getTasksByStatus();
        // die( print_r($data['tasks_by_status']));
        $this->load->view('task_view',$data);
    }


    public function insertNewTask(){ // create new task
        

        $task_name = $this->input->post('task_name');
        $result = $this->task_model->insertNewTask($task_name);
        if ( $result->status == 3){ // DB ERROR
            die( "contact to support");
        }
        echo json_encode($result);

    }

    public function updateTask(){ // update task - name and status
        
        $task_id = $this->input->post('task_id');
        $task_name = $this->input->post('task_name');
        $task_status = $this->input->post('task_status');
        $result = $this->task_model->updateTask($task_id , $task_name , $task_status );
        echo json_encode($result);

    }

     public function deleteTask(){ // delete task  ( in my job we dont delete rows from db , we change status )
        $task_id = $this->input->post('task_id');
        $result = $this->task_model->deleteTask($task_id);
        echo json_encode($result);
     }
}
