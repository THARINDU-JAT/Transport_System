<?php

namespace App\Controllers;
use App\Models\VisitorsModel;

class Visitors extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $model = new VisitorsModel();
        $visitorArray= $model -> getVisitors();

        $data['visitors'] = $visitorArray;
        return view('visitors/show', $data);
    }

    public function createVisitor(){

         $session = \Config\Services::session();
        helper('form');

        $data = [];

        if($this->request->getMethod() == 'post'){
            $input = $this->validate([

                
                'nic' => 'required',
                'name' => 'required',
                'phone'=> 'required|max_length[10]|min_length[10]',
                'address' => 'required',
            ]);

            if($input == true){
                //success
                $model = new VisitorsModel();
                
             
                $model->save([
                    'nic' => $this->request->getPost('nic'),
                    'name' => $this->request->getPost('name'),
                      'address' => $this->request->getPost('address'),
                    'phone' => $this->request->getPost('phone'),
                  
                ]);

               session()->setFlashdata('status_text', 'Visitors data has been added successfully');

                return redirect()->to(base_url('visitors'))
                ->with('status_icon', 'success')
                ->with('status', 'New visitor Added Successfully!!');
            }else{
                //error
                $data['validation'] = $this->validator;
            }
        }
        return view('visitors/create-visitors', $data);
    }

    public function deleteVisitor($id = null){

         $visitor = new VisitorsModel();
        $visitor ->delete($id);
        $data = [

            'status' =>"Deleted Successfully",
            'status_text' =>'Visitor data has been deleted successfully',
            'status_icon' =>'success'

        ];

        return $this->response->setJSON($data);
    }

    public function edit($id){

        $visitor = new VisitorsModel();
        $data['visitor'] =  $visitor->find($id);
        return view('visitors/edit', $data);
    }

    public function update($id){

         $visitor = new VisitorsModel();
        $data =[
                     'nic' => $this->request->getPost('nic'),
                    'name' => $this->request->getPost('name'),
                      'address' => $this->request->getPost('address'),
                    'phone' => $this->request->getPost('phone'),
        ];

        $visitor->update($id, $data);
        session()->setFlashdata('status_text', 'visitor data has been updated successfully');

                return redirect()->to(base_url('visitors'))
                ->with('status_icon', 'success')
                ->with('status', 'visitor Updated Successfully!!');
            }
    }

    