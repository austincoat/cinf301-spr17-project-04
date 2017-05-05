<?php
namespace App\Controllers;
use App\Renderer as Renderer;
/**
This is the public class for the Image controller.
Used to render the view that holds the images, whenever it is selected
and sent directions by the 'router'

Special?
It holds a delete, and post option for the option on the page
*/
class ImageController
{
    public function images()
    {
        $view = new Renderer('views/main/images/');
        $view->render('images.php');
    }
    public function post()
    {
        $view = new Renderer('views/main/images/');
        $view->render('uploadImage.php');
    }
    public function delete()
    {
        $view = new Renderer('views/main/images/');
        $view->render('deleteImage.php');
    }
    public function error()
    {
        $view = new Renderer('views/main/');
        $view->render('error.php');
    }
}
