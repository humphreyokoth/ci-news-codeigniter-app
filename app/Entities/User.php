<?php 
namespace App\Entities;
use CodeIgniter\Entity\Entity;

class User Extends Entity{

}
$user = $userModel->find($id);
echo $user->username;
echo $user->email;
unset($user->username);
if (!isset($user->username)) {
   $user->username='something new';
}
$userModel->save($user);
$user           = new \App\Entities\User();
$user->username = 'foo';
$user->email    =  'foo@gmail.com';
$userModel->save($user);  

?>