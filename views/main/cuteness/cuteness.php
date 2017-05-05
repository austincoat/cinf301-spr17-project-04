<?php
/**
Main view for the cuteness of each cat,
Allows you to slim the option to just one of each cat, but nothing too interesting.
does not allow CRUD commands.
*/
  use App\Models\Cuteness as Cuteness;
  $cute = new Cuteness();
 ?>

<h1>
 Check out how cute other cats are!
</h1>
<div class = 'background'>
<div class = 'transbox'>
<form method= "get">
    <p>Search for a cats cuteness by iD! ex. 1-7 <br>
    Hint: Submit -1 to show all the cuties</p>
<input type = "hidden" name="controller" value="Cuteness">
<input type = "hidden" name="action" value="cuteness">
<input type="text" name="id" value="1"><br>
<input type="submit" value="Submit">
</form>
</div>
</div>
<p>
  <?php
  if($_GET['id']!=NULL)
  {
    $cute ->selectCuteness($_GET["id"]);
  }
  if($_SESSION["Cuteness"] != NULL)
  {
    $json = $_SESSION["Cuteness"];
    foreach ($json as $key => $value) {

      echo "<div class='background'> <div class='transbox'>  <img src=".$value['imgURL']." style='width:304px;height:228px;'>".
  "<p>".$value["Name"].' Cuteness: '. $value['CuteID'].'<br></br> Description: '.$value['Description'].'<br></br> Why?: '.$value['why'].'<br></br>'.'<br></br> Chance: '.$value['Chance'].'<br></br>'.'<br></br>'."</p></div></div>";

    }
  }
  else
  {
    $json = $_SESSION["Cats"];
    foreach ($json as $key => $value) {

      echo "<div class='background'> <div class='transbox'>  <img src=".$value['imgURL']." style='width:304px;height:228px;'>".
  "<p>ID for SEARCH:".$value["CatID"].'<br></br>Name: '.$value["Name"].' <br></br>'."</p></div></div>";

    }
  }



?>
</p>
