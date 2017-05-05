<?php
namespace App\Models;
use App\Database\DB as DB;
/**
Manages home page content, nothing very special just another simple join.

Gives the home page some flare instead of being blank.
*/
class CatHome
{

  function selectCats()
  {
    ini_set('display_errors','on');

    $sql = "select Cats.CatID,Cats.Name, Cats.Breed, Cats.Birthday, CatImg.imgURL from Cats left join CatImg on CatImg.CatID = Cats.CatID ";
    $stmt = DB::run($sql);
    $_SESSION["Cats"] = $stmt->fetchAll();
    }
}
