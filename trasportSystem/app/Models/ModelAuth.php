<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class ModelAuth extends Model{
        public function save_register($data){

            $this->db->table('users')->insert($data);
        }

        public function login($emp_no){

            return $this->db->table('users')->where([

                'emp_no' => $emp_no ,
                
            ])->get()->getRowArray();

        }
    }


