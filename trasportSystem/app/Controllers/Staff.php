<?php

namespace App\Controllers;
use App\Models\StaffModel;
use CodeIgniter\HTTP\Request;

class Staff extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $model = new StaffModel();
        $staffArray= $model -> getStaff();

        $data['staffs'] = $staffArray;
        return view('staff/show', $data);
    }

     public function create(){

        $session = \Config\Services::session();
        helper('form');

        $data = [];

        if($this->request->getMethod() == 'post'){
            $input = $this->validate([

                
                'name' => 'required',
                'nic' => 'required',
                'branch' => 'required',
                'contact_no'=> 'required|max_length[10]|min_length[10]',
                // 'photo' => 'required',
                'employee_no' => 'required',
                'finger_print_no' => 'required',
                'address' => 'required',
                
            ]);

            if($input == true){
                //success
                $model = new StaffModel();
                
             
                $model->save([
                    'name' => $this->request->getPost('name'),
                    'nic' => $this->request->getPost('nic'),
                    'branch' => $this->request->getPost('branch'),
                    'contact_no' => $this->request->getPost('contact_no'),
                    //'photo' => $imageName,
                    'employee_no'=>$this->request->getPost('employee_no'),
                    'finger_print_no'=>$this->request->getPost('finger_print_no'),
                   'address' => $this->request->getPost('address'),

                ]);

               session()->setFlashdata('status_text', 'staff data has been added successfully');

                return redirect()->to(base_url('staff'))
                ->with('status_icon', 'success')
                ->with('status', 'New staff member Added Successfully!!');
            }else{
                //error
                $data['validation'] = $this->validator;
            }
        }



        return view('staff/create-staff', $data);
    }

   
    public function delete($id = null){


        $staff = new StaffModel();
        $staff ->delete($id);
        $data = [

            'status' =>"Deleted Successfully",
            'status_text' =>'Staff member data has been deleted successfully',
            'status_icon' =>'success'

        ];

        return $this->response->setJSON($data);

    }

         public function edit($id){

        $staff = new StaffModel();
        $data['staff'] =  $staff->find($id);
        return view('staff/edit', $data);
        
}

 public function update($id){


        
        $staff = new StaffModel();
        $data =[
                    'name' => $this->request->getPost('name'),
                    'nic' => $this->request->getPost('nic'),
                    'branch' => $this->request->getPost('branch'),
                    'contact_no' => $this->request->getPost('contact_no'),
                    'photo' => $this->request->getPost('photo'),
                    'employee_no'=>$this->request->getPost('employee_no'),
                    'finger_print_no'=>$this->request->getPost('finger_print_no'),
                   'address' => $this->request->getPost('address'),
        ];

        $staff->update($id, $data);
        session()->setFlashdata('status_text', 'staff member data has been updated successfully');

                return redirect()->to(base_url('staff'))
                ->with('status_icon', 'success')
                ->with('status', 'staff Updated Successfully!!');
            }
}