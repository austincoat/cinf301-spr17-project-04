<?php
namespace App\Controllers;
use App\Renderer as Renderer;
use App\Models\Login as Login;
class LoginController
{
    public function login()
    {
        if (isset($_SESSION['authorized']) and ($_SESSION['authorized'] == 1)) {
            /*
             * Should never get here if all pages without authorized set should
             * be redirected to the login page
             */
            $view = new Renderer('views/main/');
            $view->title = 'You are already logged in';
            $view->render('home.php');
        } else {
            $view = new Renderer('views/main/');
            $view->render('login.php');
            $model = new Login();
            if ($model->validate()) {
                header("Location: index.php");
            }
        }
    }

    public function logout()
    {
        if (! isset($_SESSION['authorized'])) {
            $view = new Renderer('views/main/');
            $view->title = 'You are not logged in';
            $view->render('home.php');
        } else {
            $view = new Renderer('views/access/');
            $view->render('logout.php');

            if ($_POST['logout'] === 'yes') {
                $model = new Access();
                $model->logout();
                header("Location: index.php");
            } else if ($_POST['logout'] === 'no') {
                header("Location: index.php");
            }

        }
    }
}
