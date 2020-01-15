<?php

include_once "User.php";
class UserDB
{
private $userDBConnect;
public function __construct($userDBConnect)
{
 $this->userDBConnect = $userDBConnect;
}
public function getListUsers(){
    $sql = "SELECT * FROM users";
    $stmt = $this->userDBConnect->query($sql);
    $result = $stmt->fetchAll();
    $arr = [];
    foreach ($result as $item){
        $user = new User($item['username'],$item['password'],$item['email']);
        $user->setUserID($item['id']);
        array_push($arr,$user);
    }
    return $arr;
}
public function createUser($user){
    $username = $user->getUsername();
    $password = $user->getPassword();
    $email = $user->getEmail();
    $sql = "INSERT INTO users(username,password,email) VALUES ('$username','$password','$email')";
    $this->userDBConnect->query($sql);

}
}