<?php
//include "../Model/DBConnection.php";
//include "../Model/UserDB.php";
//include "../Model/User.php";

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
                    echo "Login thành công";
                    header("Location: View/homepage.php");
                }
            }
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $users = $this->userDB->getListUsers();
            $username = $_POST['username'];
            foreach ($users as $item) {
                if ($username == $item['username']) {
                    echo "Tên tài khoản đã tồn tại";
                }
            }

        }
    }
}