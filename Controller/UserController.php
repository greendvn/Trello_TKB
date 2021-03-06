<?php
//include "../Model/DBConnection.php";
//include "../Model/UserDB.php";
//include "../Model/User.php";
ob_start();

class UserController
{
    private $userDB;

    public function __construct()
    {
        $db = new DBConnection("mysql:host=localhost;dbname=TiCo_database", "root", "Dieu1988");
        $this->userDB = new UserDB($db->connect());
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $users = $this->userDB->getListUsers();
            $username = $_POST['username'];
            $password = $_POST['password'];
            foreach ($users as $item) {
                if ($username == $item->getUsername() && $password == $item->getPassword()) {
                    $_SESSION["id"] = $item->getUserID();
                    $_SESSION["username"] = $item->getUsername();
                    header("Location: View/homepage.php?username=$username");
                    break;
                }
            }
            echo "Sai tên đăng nhập hoặc mật khẩu";
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $users = $this->userDB->getListUsers();
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $user = new User($username, $password, $email);
            foreach ($users as $item) {
                if ($username === $item->getUsername()) {
                    echo "<span style='color: red'>Tên tài khoản đã tồn tại</span>";
                    return false;
                }
            }
            $this->userDB->createUser($user);
            echo "<span style='color: blue'>Đăng ký thành công</span><br>";
            echo "<span style='color: green; text-align: center'> Tên đăng nhập của bạn là: $username</span><br>";
            echo "<a href='homepage.php?username=$username'><span style='color: red;font-style: italic;font-size: 20px'>Bấm vào đây để đăng nhập ngay</span></a>";
        }
    }
    public function getUser(){
        $username = $_SESSION['username'];
        return $this->userDB->getUserByName($username);
    }

    public function getProfile()
    {
        $username = $_GET['username'];
        $user = $this->userDB->getUserByName($username);
        include_once 'profile.php';
    }

    public function editUser()
    {
        $username = $_GET['username'];
        $user = $this->userDB->getUserByName($username);
        include_once 'edituser.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pass = $_POST['password'];
            $email = $_POST['email'];
            $image = $_FILES["image"];
            $imageName = "../images/".date("Y-m-d H:i:s").$image["name"];
            $fileTmp = $image['tmp_name'];
            move_uploaded_file($fileTmp, $imageName);
            $newUser = new User($username, $pass, $email);
            if ($image['name'] == NULL){
                $newUser->setImage($user->getImage());
            }
            else $newUser->setImage($imageName);
            $this->userDB->updateUser($newUser);
            header("Location: homepage.php?page=profile&username=$username");
        }
    }

}