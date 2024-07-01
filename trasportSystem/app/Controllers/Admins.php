<?php

namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\AdminSearch;
class Admins extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $model = new AdminModel();
        $adminsArray= $model -> getAdmins();

        $data['admins'] = $adminsArray;
        return view('admins/show', $data);
    }

    public function create(){

        $session = \Config\Services::session();
        helper('form');

        $data = [];

        if($this->request->getMethod() == 'post'){
            $input = $this->validate([

                
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'trim|required|valid_email',
                'phone'=> 'required|max_length[10]|min_length[10]',
                'address' => 'required',
                'pass' => 'required',
                'cpass' => 'required|matches[pass]',
               // 'image' => 'required',
                'groups' => 'required',
                
            ]);

            if($input == true){
                //success
                $model = new AdminModel();
                
             
                $model->save([
                    'firstName' => $this->request->getPost('firstName'),
                    'lastName' => $this->request->getPost('lastName'),
                    'email' => $this->request->getPost('email'),
                    'phone' => $this->request->getPost('phone'),
                    'address' => $this->request->getPost('address'),
                    'pass'=>$this->request->getPost('pass'),
                    'cpass'=>$this->request->getPost('cpass'),
                   // 'image' => $this->request->getPost('image'),
                    'groups' => $this->request->getPost('groups'),

                ]);

               session()->setFlashdata('status_text', 'Admin data has been added successfully');

                return redirect()->to(base_url('admins'))
                ->with('status_icon', 'success')
                ->with('status', 'New admin Added Successfully!!');
            }else{
                //error
                $data['validation'] = $this->validator;
            }
        }



        return view('create-admins/createAdmins', $data);
    }


    

    public function delete($id = null){


        $admin = new AdminModel();
        $admin ->delete($id);
        $data = [

            'status' =>"Deleted Successfully",
            'status_text' =>'Admin data has been deleted successfully',
            'status_icon' =>'success'

        ];

        return $this->response->setJSON($data);

    }
    

       public function edit($id){

        $admin = new AdminModel();
       $data['admin'] =  $admin->find($id);
        return view('edit-admins/editeAdmins', $data);
        
}

public function update($id){


        
        $admin = new AdminModel();
        $data =[
                    'firstName' => $this->request->getPost('firstName'),
                    'lastName' => $this->request->getPost('lastName'),
                    'email' => $this->request->getPost('email'),
                    'phone' => $this->request->getPost('phone'),
                    'address' => $this->request->getPost('address'),
                    'pass'=>$this->request->getPost('pass'),
                    'cpass'=>$this->request->getPost('cpass'),
                   // 'image' => $this->request->getPost('image'),
                    'groups' => $this->request->getPost('groups'),
        ];

        $admin->update($id, $data);
        session()->setFlashdata('status_text', 'Admin data has been updated successfully');

                return redirect()->to(base_url('admins'))
                ->with('status_icon', 'success')
                ->with('status', 'Admin Updated Successfully!!');
            }

}