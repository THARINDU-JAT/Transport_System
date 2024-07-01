<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model {

    protected $table = 'admins';
    protected $allowedFields = ['id','image','firstName', 'lastName', 'email', 'phone', 'address','groups','Status', 'pass', 'cpass', 'Date'];


    public function  getAdmins() {

        return $this->orderBy('id', 'DESC')->findAll();
}

}
?>