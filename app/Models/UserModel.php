<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    protected $table         = 'Users';
    protected $allowedFields =  [
        'username','email','password',
    ];
    protected $returnType    = \App\Entities\User::class;
    protected $useTimestamps = true;


}





?>