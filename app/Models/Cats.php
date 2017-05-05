<?php
namespace App\Models;
use App\Database\DB as DB;
/**
Model used by view to select the information of all or of selected cats,

Also gives option to delte, update and add new information to DB.
*/
class Cats
{

  function selectCats($id)
  {
    if(isset($id))
    {
    ini_set('display_errors','on');

    $sql = "select * from Cats where CatID = $id";
    $stmt = DB::run($sql);
    $_SESSION["Cats2"] = $stmt->fetchAll();
    }
  }
  function post($name,$breed,$gender,$birthday,$cuteness)
  {
    $sql = "INSERT INTO Cats (Name,Breed,Gender,Birthday,Cuteness) VALUES ('$name', '$breed', '$gender', '$birthday', $cuteness)";
    $stmt = DB::run($sql);

  }
  function update($id,$name,$breed,$gender,$birthday,$cuteness)
  {
    $sql = "UPDATE Cats SET Name = '$name', Breed = '$breed',  Gender = '$gender', Birthday = '$birthday', Cuteness = '$cuteness'
    WHERE CatID = $id";

    $stmt = DB::run($sql);

  }

  function remove($deleteID)
  {
    $sql = "delete from Cats where CatID = $deleteID";

    $stmt = DB::run($sql);

  }
}
