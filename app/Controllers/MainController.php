<?php
namespace App\Controllers;
use App\Renderer as Renderer;
/**
This is the public class for the  main controller.
Used to render the view whenever it is selected
and sent directions by the 'router'

Special?
It simply calls the home.php file, that is it. No special functions.
*/
class MainController
{
    public function home()
    {
        $view = new Renderer('views/main/');
        $view->render('home.php');
    }
    public function logout()
    {
        $view = new Renderer('views/main/');
        $view->render('logout.php');
    }
    public function error()
    {
        $view = new Renderer('views/main/');
        $view->render('error.php');
    }
}
