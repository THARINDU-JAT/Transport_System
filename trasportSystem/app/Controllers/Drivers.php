<?php

namespace App\Controllers;

use App\Models\DriverModel;

class Drivers extends BaseController
{
    public function index()
    {

        $session = \Config\Services::session();
        $data['session'] = $session;

        $model = new DriverModel();
        $driverArray= $model -> getDrivers();

        $data['drivers'] = $driverArray;
        return view('driver/show', $data);
    }

    public function deleteDriver($id = null){

        $driver = new DriverModel();
        $driver ->delete($id);
        $data = [

            'status' =>"Deleted Successfully",
            'status_text' =>'Driver data has been deleted successfully',
            'status_icon' =>'success'

        ];

        return $this->response->setJSON($data);
    }

    public function createDriver(){

         $session = \Config\Services::session();
        helper('form');

        $data = [];

        if($this->request->getMethod() == 'post'){
            $input = $this->validate([

                
                'emp_no' => 'required',
                'finger_print_no' => 'required',
                'nic'=> 'required',
                'name_with_initials' => 'required',
                 'phone' => 'required|max_length[10]|min_length[10]',
            ]);

            if($input == true){
                //success
                $model = new DriverModel();
                
             
                $model->save([
                    'emp_no' => $this->request->getPost('emp_no'),
                    'finger_print_no' => $this->request->getPost('finger_print_no'),
                      'nic' => $this->request->getPost('nic'),
                       'name_with_initials' => $this->request->getPost('name_with_initials'),
                    'phone' => $this->request->getPost('phone'),
                  
                ]);

               session()->setFlashdata('status_text', 'Driver data has been added successfully');

                return redirect()->to(base_url('drivers'))
                ->with('status_icon', 'success')
                ->with('status', 'New driver Added Successfully!!');
            }else{
                //error
                $data['validation'] = $this->validator;
            }
        }
        return view('driver/create-drivers', $data);
    }

       public function edit($id){

        $driver = new DriverModel();
       $data['driver'] =  $driver->find($id);
        return view('driver/edit', $data);
        
}

     public function update($id){


        
        $admin = new DriverModel();
        $data =[
                    'emp_no' => $this->request->getPost('emp_no'),
                    'finger_print_no' => $this->request->getPost('finger_print_no'),
                      'nic' => $this->request->getPost('nic'),
                       'name_with_initials' => $this->request->getPost('name_with_initials'),
                    'phone' => $this->request->getPost('phone'),
        ];

        $admin->update($id, $data);
        session()->setFlashdata('status_text', 'Driver data has been updated successfully');

                return redirect()->to(base_url('drivers'))
                ->with('status_icon', 'success')
                ->with('status', 'Driver Updated Successfully!!');
            }
}