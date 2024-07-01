<?php

namespace App\Models;

use CodeIgniter\Model;

class DriverModel extends Model {

    protected $table = 'drivers';
    protected $allowedFields = ['id','emp_no','finger_print_no', 'nic', 'name_with_initials', 'phone', 'data'];


    public function  getDrivers() {

        return $this->orderBy('id', 'DESC')->findAll();
}

}
?>