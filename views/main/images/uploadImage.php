<?php
/**
Calls the upload function from the image model.
Adds photo and lets you know if it was succesful.
*/
  use App\Models\Images as upload;
  $img = new upload();
  $img-> post($_GET['breed'],$_GET['image'],$_GET['description'],$_GET['id']);
 ?>

<h1> Cat Photo uploaded! </h1>
