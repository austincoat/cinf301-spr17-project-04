<?php
namespace App\Controllers;
use App\Renderer as Renderer;
/**
This is the public class for the  Cutenesscontroller.
Used to render the view whenever it is selected
and sent directions by the 'router'

Special?
It simply renders the view with the cuteness of the cats.
*/
class CutenessController
{
    public function cuteness()
    {
        $view = new Renderer('views/main/cuteness/');
        $view->render('cuteness.php');
    }
    public function error()
    {
        $view = new Renderer('views/main/cuteness/');
        $view->render('error.php');
    }
}
