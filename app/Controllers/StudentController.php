<?php

namespace App\Controllers;

class StudentController extends BaseController
{
    public $db;
    
    
    function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function registration(): string
    {
        $query = $this->db->table('user')->get();

        foreach ($query->getResult() as $row) {
            echo $row->name;
        }
        return view('registration_form');
    }

    public function register(): string
    {
        return view('welcome_message');
    }

    public function profile($id)
    {
        $query = $this->db->table('user')->get();
        $data = ['userId'=>$id];

        // echo $query->getResult();

        // foreach ($query->getResult() as $row) {
        //     echo $row->name;
        // }
        return view('student_profile', $query->getResult());
    }
}