<?php
/**
Main view for the images.
Allows you to acces a no fluff mode, add images with the form,
delete images ect.
*/
  use App\Models\Images as Images;
  $cats = new Images();
 ?>

<h1>
  Simply photos, None of the fluff!<br></br> Well, none of the fluff you're not here to see.
</h1>

<form method= "get">
    <p>But, if you want all the info of a cat and there image... put in their id.. ex. 1-7 <br>
    Hint: Submit -1 to return to no fluff mode</p>
<input type = "hidden" name="controller" value="Images">
<input type = "hidden" name="action" value="images">
<input type="text" name="id" value="1"><br>
<input type="submit" value="Submit">
</form>

<form method= "get">
    <p>Delete image ):</p>
<input type = "hidden" name="controller" value="Images">
<input type = "hidden" name="action" value="delete">
<input type="text" name="id" value="1"><br>
<input type="submit" value="Submit">
</form>

<form method= "get">
    <p>Upload Photo! Remember to link it to a certain cat!</p>
<input type = "hidden" name="controller" value="Images">
<input type = "hidden" name="action" value="post">
Breed:<br>
<input type="text" name="breed" value="American Curl"><br>
URL:<br>
<input type="text" name="image" value="url"><br>
Description:<br>
<input type="text" name="description" value="Sleeping"><br>
ID:<br>
<input type="text" name="id" value="1"><br>
<input type="submit" value="Submit">
</form>

<p>
  <?php
  if($_GET['id']!=NULL)
  {
    $cats ->selectCats($_GET['id']);
  }
  else {
    $cats ->selectAll();
  }
  #I Put this in so when it tests this IF, it does not put out the obvious
  #That is is obviously null so it continues.
  error_reporting(E_ERROR | E_PARSE);
  if($_SESSION["Images"] != NULL)
  {
      $json = $_SESSION["Images"];
      foreach ($json as $key => $value)
      {
        if($value['imgURL'] != NULL)
        {
          echo "<div class='background'> <div class='transbox'>  <img src=".$value['imgURL']." style='width:304px;height:228px;'>".
          "<p>Breed: ".$value["breed"].'<br></br> Description : '.$value['imgDescription']."</p></div></div>";
        }
      }
  }
  else
  {
    $json = $_SESSION["AllImages"];
    foreach ($json as $key => $value)
    {
      if($value['imgURL'] != NULL)
      {
        echo "<img src=".$value['imgURL']." style='width:600px;height:400px;'>";
      }
    }
  }

?>
</p>
