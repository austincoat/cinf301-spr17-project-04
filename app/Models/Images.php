<?php
namespace App\Models;
use App\Database\DB as DB;
/**
Model used by view to select particular pictures of cats,
or all photos.
Also gives option to delte and add new photos to DB.
*/
class Images
{

  function selectCats($id)
  {
    $sql = "select breed,imgURL,imgDescription from CatImg where CatID= $id";
    $stmt = DB::run($sql);
    $_SESSION["Images"] = $stmt->fetchAll();
  }
  function delete($id)
  {
    $sql = "delete from CatImg where CatImgID = $id";
    $stmt = DB::run($sql);
  }
  function selectAll()
  {
    ini_set('display_errors','on');

    $sql = "select breed,imgURL,imgDescription from CatImg";
    $stmt = DB::run($sql);
    $_SESSION["AllImages"] = $stmt->fetchAll();
  }
  function post($breed,$imgURL,$imgDescription,$CatID)
  {
    $sql = "INSERT INTO CatImg (breed,imgURL,imgDescription,CatID) VALUES ('$breed', '$imgURL', '$imgDescription', $CatID)";

    $stmt = DB::run($sql);

  }
}
