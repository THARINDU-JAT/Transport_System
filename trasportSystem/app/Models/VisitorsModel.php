<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorsModel extends Model {

    protected $table = 'visitors';
    protected $allowedFields = ['id','nic','name', 'address', 'phone', 'date'];


    public function  getVisitors() {

        return $this->orderBy('id', 'DESC')->findAll();
}

}
?>