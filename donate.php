<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chantry Island</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
    <script src="greensock/src/minified/TweenMax.min.js"></script>
    <link rel="stylesheet" href="css/foundation.css" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
    <script src="js/ScrollToPlugin.min.js"></script>
</head>
  <body class="donate">
    <?php
      require_once 'includes/header.php';
     ?>

     <section class="donations">
       <div class="row">
         <div class="small-8 column">
           <h2>Donations</h2>
           <!-- <p>Since 1997 we have had a tremendous amount of support by donations. If you would like to be included please send a cheque or money order to:</p> -->
           <p>Please specify your Donation Preference: Chantry Island and/or New Tour Boat</p>
           <p>We are currently engaged in Fund Raising to support our New Boat, Dock Improvements, and Marine Heritage Projects. We will send a tax receipt for all donations $20 and more.</p>
         </div>
         <div class="small-4 column">
           <h4>Mailing Address</h4>
           <p>Marine Heritage Society<br>
           Box 421<br>
           Southampton, Ontario<br>
           Canada, N0H 2L0</p>
         </div>
       </div>
     </section>

     <section class="send-donation">
       <div class="row">
         <a class="text-center column" href="https://www.paypal.com/cgi-bin/webscr"><button class="button" type="button" name="button">Donate Now</button></a>
       </div>
     </section>

    <?php
    require_once 'includes/bookinfo.php';
    ?>

    <?php
    require_once 'includes/sponsors.php';
    ?>



    <?php
      require_once 'includes/footer.php';
     ?>
  </body>
</html>
