<?php

class UserController
{
    private $userDB;

    public function __construct()
    {
        $db = new DBConnection("mysql:host=localhost;dbname=TiCo_database", "root", "@Ngovietan123");
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
            $user = new User($username, $password, $email);
            foreach ($users as $item) {
                if ($username === $item->getUsername()) {
                    echo "Tên tài khoản đã tồn tại";
                    return false;
                }
            }
            $this->userDB->createUser($user);
            echo "Đăng ký thành công";
        }
    }
}