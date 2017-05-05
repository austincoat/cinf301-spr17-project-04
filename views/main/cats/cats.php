<?php
/**
Main view for all cats, allowing you to slim down results,
And of course, edit add and remove cat information. 
*/
  use App\Models\Cats as Cats;
  $cats = new Cats();
 ?>

<h1>
 See other cats, and upload your own!
</h1>

<p>
  <form method= "get">
      <p>Search for a cat by iD! ex. 1-7</p>
  <input type = "hidden" name="controller" value="Cats">
  <input type = "hidden" name="action" value="cats">
  <input type="text" name="id" value="1"><br>
  <input type="submit" value="Submit">
  </form>

  <form method= "get">
      <p>Have a Cat? Put in its information! Need to update the info? Scroll to the bottom!</p>
  <input type = "hidden" name="controller" value="Cats">
  <input type = "hidden" name="action" value="post">
  Name:<br>
  <input type="text" name="name" value="Billy"><br>
  Breed:<br>
  <input type="text" name="breed" value="Panther"><br>
  Gender:<br>
  <input type="text" name="gender" value="Male/Female"><br>
  Birthday:<br>
  <input type="text" name="birthday" value="1996-08-10"><br>
  Cuteness:<br>
  <input type="text" name="cuteness" value="1-10"><br>
  <input type="submit" value="Submit">
</form>

<form method= "get">
    <p>Delete A cat you just dont like anymore</p>
<input type = "hidden" name="controller" value="Cats">
<input type = "hidden" name="action" value="delete">
<input type="text" name="deleteID" value="8"><br>
<input type="submit" value="Submit">
</form>
  <?php

  $cats ->selectCats($_GET["id"]);
  if($_SESSION["Cats2"] != NULL)
  {
    $json = $_SESSION["Cats2"];
  }
  else {
    $json = $_SESSION["Cats"];
  }
  foreach ($json as $key => $value)
  {
    echo "<div class='background'> <div class='transbox'><p>".$value["Name"].' the '. $value['Breed'].'<br></br>'." Born ".$value['Birthday'].'<br></br>'."</p></div></div>";

  }

?>
</p>


<form method= "get">
    <p>Update a cats information! (Preferabbly ID 8, after you insert one that is)</p>
<input type = "hidden" name="controller" value="Cats">
<input type = "hidden" name="action" value="update">
ID:<br>
<input type="text" name="uID" value="id"><br>
Name:<br>
<input type="text" name="name" value="name"><br>
Breed:<br>
<input type="text" name="breed" value="breed"><br>
Gender:<br>
<input type="text" name="gender" value="new gender?"><br>
Birthday:<br>
<input type="text" name="birthday" value="new birthday? O_O"><br>
Cuteness:<br>
<input type="text" name="cuteness" value="Cuteness"><br>
<input type="submit" value="Submit">
</form>
