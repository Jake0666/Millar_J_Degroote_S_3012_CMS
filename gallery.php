<?php

	ini_set('display_errors',1);
    error_reporting(E_ALL);

	require_once('admin/phpscripts/init.php');

	if(isset($_GET['filter'])) {
		$tbl1 = "tbl_images";
		$filter = $_GET['filter'];
		$getImages = filterType($tbl1, $filter);
	}else{
		$tbl = "tbl_images";
		$getImages = getAll($tbl);
	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chantry Island - Gallery</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
    <script src="greensock/src/minified/TweenMax.min.js"></script>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
		<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
    <script src="js/ScrollToPlugin.min.js"></script>
		<script src="https://use.fontawesome.com/d0bb73139e.js"></script>
</head>
  <body class="gallery">

    <?php
      require_once 'includes/header.php';
     ?>

     <section class="photo-info">
       <div class="row">
         <h2 class="text-center column">Photo Gallery</h2>
         <p class="text-center small-10 small-pull-1 column">
Welcome to our photo gallery. This section includes pictures of Chantry Island and the area of Lake Huron surrounding the Island. It also includes pictures of the lighthouse and keeper's cottage inside and out, as well as photos of some of the birds and flowers native to the island.
If you have photos of Chantry Island that you would like to share with us, connect with our Facebook page.</p>
       </div>
     </section>

		 <section class="photo-gallery">
			 <h2 class="hidden">Main Gallery</h2>
			 <div class="expanded row">


	       <div class="expanded row">

	         <img class="thumb gallery-hover small-3 float-left " id="1" src="images/arial-thumb.jpg" alt="Chantry Island Arial Shot">

	         <img class="thumb gallery-hover small-3 float-left " id="2" src="images/chantry-island-base-thumb.jpg" alt="Chantry Island GiftShop">

	         <img class="thumb gallery-hover small-3 float-left " id="3" src="images/chantry-island-thumb.jpg" alt="Chantry Island Arial">

	         <img class="thumb gallery-hover small-3 float-left " id="4" src="images/island-flower-thumb.jpg" alt="Bright Chantry Flower">

					 <img class="thumb gallery-hover small-3 float-left " id="5" src="images/peerless-2-boat-thumb.jpg" alt="Peerless 2 Tour Boat">

	         <img class="thumb gallery-hover small-3 float-left " id="6" src="images/peerless-thumb.jpg" alt="Peerless">

	         <img class="thumb gallery-hover small-3 float-left " id="7" src="images/peerless-tour-boat-thumb.jpg" alt="Peerless 1 Tour Boat">

	         <img class="thumb gallery-hover small-3 float-left " id="8" src="images/top-34-thumb.jpg" alt="Refurbished Dinning Room">

	       </div>

	       <div class="overlay hide">

	         <i class="close fa fa-times fa-3x hide"></i>
	         <i class="arrow arrowLeft fa fa-caret-left fa-4x hide"></i>
	         <i class="arrow arrowRight fa fa-caret-right fa-4x hide"></i>
	         <img src="" alt="Gallery Image" class="fullImage gal small-7 medium-7 medium-pull-2 columns hide">

	       </div>




			 </div>
	   </section>



     <?php
       require_once 'includes/sponsors.php';
      ?>
     <?php
       require_once 'includes/footer.php';
      ?>
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/what-input.min.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/foundation.js"></script>
	<script src="js/main.js"></script>
  </body>
</html>
