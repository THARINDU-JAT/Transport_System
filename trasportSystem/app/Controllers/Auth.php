<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{

    public function index(){
       //
    }

    public function login()
    {
        $data = array(
            'title' => 'Login',

        );
        return view('auth/login', $data);
    }

    public function __construct()
    {
        helper('form');
       $this->ModelAuth = new ModelAuth();
    }

    public function register()
    {
        $data = array(
            'title' => 'Register',

        );
        return view('auth/register', $data);
    }

    public function save_register(){

        if($this->validate([
            'emp_no' =>[
                'label' => 'Employee number',
                'rules' =>'required',
                'errors' =>[
                     'required' => 'Employee Number is required'
                ]

                ],
                 'email' =>[
                'label' => 'E-Mail',
                'rules' =>'required',
                'errors' =>[
                     'required' => 'Email  is required'
                ]

                ],
                 'tel_no' =>[
                'label' => 'Mobile Number',
                'rules' =>'required',
                'errors' =>[
                     'required' => 'Mobile number  is required'
                ]
                ],

                  'passowrd' =>[
                'label' => 'Password',
                'rules' =>'required',
                'errors' =>[
                     'required' => 'Password  is required'
                ]
                ],

                  'repassword' =>[
                'label' => 'Retype Password',
                'rules' =>'required|matches[passowrd]',
                'errors' =>[
                     'required' => 'Retype Password  is required',
                     'matches' => 'Confirm Password is invalid!!'
                ]
                ],
        ])){
            $data  = array(
                'emp_no'=> $this->request->getPost('emp_no'),
                'email'=> $this->request->getPost('email'),
                'tel_no'=> $this->request->getPost('tel_no'),
                'passowrd'=> $this->request->getPost('passowrd')
            );
            $this->ModelAuth->save_register($data);
            session()->setFlashdata('message', 'Registration successful!!');
            return redirect()->to(base_url('/register'));

        }else{

            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->back();
        }

    }


    public function check_login(){

        if($this->validate([
             'emp_no' =>[
                'label' => 'Employee No',
                'rules' =>'required',
                'errors' =>[
                     'required' => 'Employee number is required'
                ]

                ]
        ])){
            $emp_no = $this->request->getPost('emp_no');
            $check = $this->ModelAuth->login($emp_no);
            if($check){

                session()->set('log', true);
                session()->set('emp_no', $check['emp_no']);
                session()->set('email', $check['email']);

                return redirect()->to(base_url('dashboard'));
        }else{

            session()->setFlashdata('error', 'Employee number is incorrect..!!');
            return redirect()->back();
            
        }
    }else{

         session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->back();
    }
    }

    public function logout(){
        session()->remove('log');
        session()->remove('emp_no');
        
        session()->setFlashdata('message', 'Logout Successful..!!');
            return redirect()->to(base_url('/'));
    }

    
}
