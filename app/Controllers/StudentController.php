<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait; // untuk return json (API)
use CodeIgniter\HTTP\RequestInterface;

class StudentController extends BaseController
{
    use ResponseTrait; // untuk return json (API)
    public $db;
    public $request;
    
    
    function __construct() {
        $this->db = \Config\Database::connect();
        $this->request = \Config\Services::request();
    }

    public function registration(): string
    {
        // $query = $this->db->table('user')->get();

        // foreach ($query->getResult() as $row) {
        //     echo $row->name;
        // }
        return view('registration_form');
    }

    public function register(): string
    {

        // var_dump($this->request->getPost());
        // die();

        $data = [
            'name' => $this->request->getPost()["name"],
            'email' => $this->request->getPost()["email"]
        ];

       
        $this->db->table('user')->insert($data);
        return view('welcome_message');
    }

    public function edit($id){
        $query = $this->db->table('user')->where('id',$id)->get();

        $data = ['data'=>$query->getResult()[0]];

        // var_dump($query->getResult()[0]);
        // die();
        return view('edit_form', $data);
    }

    public function update($id){
        $data = [
            'name' => $this->request->getPost()["name"],
            'email' => $this->request->getPost()["email"]
        ];
        $query = $this->db->table('user')->where('id',$id)->update($data);
        return view('welcome_message');
    }

    public function profile($id)
    {
        $query = $this->db->table('user')->get();

        // var_dump($query->getResult());
        // die();
        //$data = ['userId'=>$id]

        $data = ['data'=>$query->getResult()];

        // echo $query->getResult();

        // foreach ($query->getResult() as $row) {
        //     echo $row->name;
        // }
        return view('student_profile', $data);
    }

    // return json (API)
    public function apiGetUser(){
        $query = $this->db->table('user')->get();
        return $this->respond($query->getResult());
    }

    // return json (API)
    public function apiGetUserById($userId){ // nama parameter tak kisah
        $query = $this->db->table('user')->getWhere(['id' => $userId]);
        return $this->respond($query->getResult()[0]);
    }
}