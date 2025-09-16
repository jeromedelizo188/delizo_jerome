<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class StudentsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->model('StudentsModel');
    }

    function test()
    {
        if ($this->db) {
            echo 'Connection was established';
        }
    }

    function get_all()
    {
        $data['users'] = $this->StudentsModel->all();
        $this->call->view('view', $data);
    }

    function create()
    {
        if ($this->form_validation->submitted()) {
            //print_r('Hello');
            //exit();
            $last_name = $this->io->post('lastname');
            $first_name = $this->io->post('firstname');
            $email = $this->io->post('email');
            $data = array(
                'last_name' => $last_name,
                'first_name' => $first_name,
                'email' => $email
            );
            if ($this->StudentsModel->insert($data)) {
                redirect('view');
            } else {
                //$this->call->view('view');
                redirect('create');
            }
        } else {
            $this->call->view('create');
        }
    }


    function update($id)
    {
        $user = $this->StudentsModel->find($id);
        if ($this->io->method() == 'post') {
            $last_name = $this->io->post('lastname');
            $first_name = $this->io->post('firstname');
            $email = $this->io->post('email');
            $data = array(
                'last_name' => $last_name,
                'first_name' => $first_name,
                'email' => $email
            );
            if ($this->StudentsModel->update($id, $data)) {
                redirect('view');
            } else {
                $data['user'] = $user;
                $this->call->view('update', $data);
            }
        }
        else {
            $this->call->view('update', ['user' => $user]);
        }
    }

    function delete($id)
    {
        if ($this->StudentsModel->delete($id)) {
            redirect('view');
        }
    }

}
?>