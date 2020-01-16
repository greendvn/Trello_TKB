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
        $db = new DBConnection("mysql:host=127.0.0.1;dbname=TiCo_database", "root", "long1996");
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $pass = $_POST['password'];
            $email = $_POST['email'];
            $image = $_POST['image'];
            $newUser = new User($username,$pass,$email);
            $newUser->setImage($image);
            $this->userDB->updateUser($newUser);
            header("Location: homepage.php?username=$username");
        }
    }

}