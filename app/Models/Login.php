<?php
namespace App\Models;
use App\Database\DB as DB;
class Login
{
    public function validate()
    {
        $user = $_POST['user'];
        $password = $_POST['password'];
        $value = $_POST['signup'];
        $passwordHash = password_hash("$password", PASSWORD_DEFAULT);
        if($value == "0")
        {
        $sql = "select Password from Password where User = '$user';";
        $stmt = DB::run($sql);
        $_SESSION["password"] = $stmt->fetchAll();
        $correctPass = $_SESSION["password"][0]["Password"];

        if (password_verify($correctPass, $passwordHash))
        {
          echo "MADE IT";
          $_SESSION['user'] = $user;
          $_SESSION['authorized'] = 1;
          $_SESSION['userid'] = $UserPID;
          return true;
        }
        else
        {
          return false;
        }
      }
      else
      {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "insert into Password (User,Password) values('$user','$passwordHash')";
        try {
          $stmt = DB::run($sql);
        } catch (PDOException $e) {
          $e->getMessage();
        }

      }


    }

    public function logout()
    {
        session_unset();
        session_destroy();
        session_write_close();
    }
}
