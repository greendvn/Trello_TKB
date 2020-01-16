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
                    header("Location: View/homepage.php");
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
            $user = new User($username,$password,$email);
            foreach ($users as $item) {
                if ($username === $item->getUsername()) {
                    echo "<span style='color: red'>Tên tài khoản đã tồn tại</span>";
                    return false;
                }
            }
            $this->userDB->createUser($user);
            echo "<span style='color: blue'>Đăng ký thành công</span><br>";
            echo "<span style='color: green; text-align: center'> Tên đăng nhập của bạn là: $username</span><br>";
            echo "<a href='homepage.php'><span style='color: red;font-style: italic;font-size: 20px'>Bấm vào đây để đăng nhập ngay</span></a>";
        }
    }
    public function registerSuccess(){
            include 'alertRegisterAndLogin.php';
    }
}