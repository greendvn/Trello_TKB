<?php

include_once "User.php";

class UserDB
{
    private $userDBConnect;

    public function __construct($userDBConnect)
    {
        $this->userDBConnect = $userDBConnect;
    }


public function getUserByName($username){
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $stmt = $this->userDBConnect->query($sql);
    $result = $stmt->fetch();
    $user = new User($result['username'],$result['password'],$result['email']);
    $user->setUserID($result['id']);
    $user->setImage($result['image']);
    return $user;

}
public function updateUser($user){
    $name = $user->getUsername();
    $pass = $user->getPassword();
    $email = $user->getEmail();
    $image = $user->getImage();
    $sql = "UPDATE users SET password = ?, email = ?, image = ? WHERE username = ?";
    $stmt = $this->userDBConnect->prepare($sql);
    $stmt->bindParam(1,$pass);
    $stmt->bindParam(2,$email);
    $stmt->bindParam(3,$image);
    $stmt->bindParam(4,$name);
    $stmt->execute();
}
    public function getListUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->userDBConnect->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $user = new User($item['username'], $item['password'], $item['email']);
            $user->setUserID($item['id']);
            array_push($arr, $user);
        }
        return $arr;
    }

    public function createUser($user)
    {
        $username = $user->getUsername();
        $password = $user->getPassword();
        $email = $user->getEmail();
        $sql = "INSERT INTO users(username,password,email) VALUES ('$username','$password','$email')";
        $this->userDBConnect->query($sql);

    }
}