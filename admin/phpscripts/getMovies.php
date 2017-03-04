<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    require_once("connect.php");

    if(isset($_GET['srch'])) {
      $srch = $_GET['srch'];
      $imagesQuery = "SELECT images_title FROM tbl_images WHERE images_title LIKE '$srch%' ORDER BY images_title ASC";
      $getImages = mysqli_query($link, $imagesQuery);
    }else{

    $imagesQuery = "SELECT images_id, images_title, images_thumb, images_image FROM tbl_images ORDER BY images_title ASC";
    $getImages = mysqli_query($link, $imagesQuery);
}


    $jsonResult = "[";

      while($imgResult = mysqli_fetch_assoc($getImages)) {


      $jsonResult .=json_encode($imgResult).",";
    }

    $jsonResult .= "]";
    //$jsonResult = substr_replace(string, replacement, start, length);
    $jsonResult = substr_replace($jsonResult, "", -2, 1);
    echo $jsonResult;

 ?>
