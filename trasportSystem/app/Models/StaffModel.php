<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model {

    protected $table = 'staff';
    protected $allowedFields = ['id','name','nic', 'branch', 'contact_no', 'photo', 'employee_no','finger_print_no','address','date'];


    public function  getStaff() {

        return $this->orderBy('id', 'DESC')->findAll();
}
}
?>