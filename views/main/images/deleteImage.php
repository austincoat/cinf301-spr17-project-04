<?php
/**
Calls the delete function from the image model.
Removes said photo and lets you know if it was succesful.
*/
  use App\Models\Images as Images;
  $image = new Images();
  $image-> delete($_GET['id']);
 ?>

<h1> Cat photo removed! Oh my! </h1>
