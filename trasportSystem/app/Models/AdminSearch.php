<?php
namespace App\Models;

use CodeIgniter\Model;

class AdminSearch extends Model
{
    protected $table = 'admins'; // Replace with your actual table name
    protected $allowedFields = 'firstName';
}
?>