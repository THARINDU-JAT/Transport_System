<?php

namespace App\Controllers;
use App\Models\VehicleModel;


class Vehicles extends BaseController
{
    public function index()
    {

         $session = \Config\Services::session();
        $data['session'] = $session;

        $model = new VehicleModel();
        $vehicleArray= $model -> getVehicles();
        $data['vehicles'] =  $vehicleArray;
        return view('vehicle/show', $data);
    }

    public function delete($id = null){


        $vehicle = new VehicleModel();
        $vehicle ->delete($id);
        $data = [

            'status' =>"Deleted Successfully",
            'status_text' =>'Vehicle data has been deleted successfully',
            'status_icon' =>'success'

        ];

        return $this->response->setJSON($data);

    }

    public function create(){

     $session = \Config\Services::session();
        helper('form');

        $data = [];

        if($this->request->getMethod() == 'post'){
            $input = $this->validate([

                
                'license_plate_no' => 'required',
                'chassis_no' => 'required',
                'engine_no' => 'required',
                'model'=> 'required',
                'color' => 'required',
                'm_year' => 'required',
                'mileage' => 'required',
                
            ]);

            if($input == true){
                //success
                $model = new VehicleModel();
                
             
                $model->save([
                    'license_plate_no' => $this->request->getPost('license_plate_no'),
                    'chassis_no' => $this->request->getPost('chassis_no'),
                    'engine_no' => $this->request->getPost('engine_no'),
                    'model' => $this->request->getPost('model'),
                    'color' => $this->request->getPost('color'),
                    'm_year'=>$this->request->getPost('m_year'),
                    'mileage' => $this->request->getPost('mileage'),

                ]);

               session()->setFlashdata('status_text', 'Vehicle data has been added successfully');

                return redirect()->to(base_url('vehicles'))
                ->with('status_icon', 'success')
                ->with('status', 'New vehicle Added Successfully!!');
            }else{
                //error
                $data['validation'] = $this->validator;
            }
        }
        return view('vehicle/create-vehicle', $data);
    }

       public function edit($id){

        $vehicle = new VehicleModel();
       $data['vehicle'] =  $vehicle->find($id);
        return view('vehicle/edit', $data);
        
}

 public function update($id){


        
        $vehicle = new VehicleModel();
        $data =[
                   'license_plate_no' => $this->request->getPost('license_plate_no'),
                    'chassis_no' => $this->request->getPost('chassis_no'),
                    'engine_no' => $this->request->getPost('engine_no'),
                    'model' => $this->request->getPost('model'),
                    'color' => $this->request->getPost('color'),
                    'm_year'=>$this->request->getPost('m_year'),
                    'mileage' => $this->request->getPost('mileage'),

        ];

        $vehicle->update($id, $data);
        session()->setFlashdata('status_text', 'Vehicle data has been updated successfully');

                return redirect()->to(base_url('vehicles'))
                ->with('status_icon', 'success')
                ->with('status', 'Vehicle Updated Successfully!!');
            }


}