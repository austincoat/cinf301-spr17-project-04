<?php
namespace App\Controllers;
use App\Renderer as Renderer;
/**
This is the public class for the  cat controller.
Used mainly to render the view whenever it is selected
and sent directions by the 'router'

Special?
It holds a delete, post, and update option for the option on the page
*/
class CatController
{
    public function cats()
    {
        $view = new Renderer('views/main/cats/');
        $view->render('cats.php');
    }
    public function post()
    {
        $view = new Renderer('views/main/cats/');
        $view->render('newCat.php');
    }
    public function delete()
    {
        $view = new Renderer('views/main/cats/');
        $view->render('catDelete.php');
    }
    public function update()
    {
        $view = new Renderer('views/main/cats/');
        $view->render('catEdit.php');
    }
    public function error()
    {
        $view = new Renderer('views/main/cats/');
        $view->render('error.php');
    }
}
