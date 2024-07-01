<?php

namespace App\Models;

use CodeIgniter\Model;

class VehicleModel extends Model {

    protected $table = 'vehicles';
    protected $allowedFields = ['id','license_plate_no','chassis_no', 'engine_no', 'model', 'color', 'm_year','mileage','date'];


    public function  getVehicles() {

        return $this->orderBy('id', 'DESC')->findAll();
}

}
?>