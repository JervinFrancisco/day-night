<!DOCTYPE html>
<html lang="en">
<?php
 include("includes/header.inc.php");
?>


    <?php 
    date_default_timezone_set("America/New_York");
    $time = date('H');
    if ($time >= "6" && $time<"18"){
      echo "<img src='http://moziru.com/images/sunshine-clipart-transparent-13.png' class='moon' alt='moon';>"; 
        echo "<body class = 'day'>  </body>";
    }else{
       echo "<img src='http://www.clker.com/cliparts/1/1/3/8/11949897171553253942full_moon_dan_gerhards_01.svg.med.png' class='moon' alt='moon';>"; 
        echo "<body class = 'night'>  </body>"; 
    
    }
    
?>

    <p class="time">
        <?php
echo "The current date: " . date("Y/m/d") . "</br>";
date_default_timezone_set("America/New_York");
echo "And the time is : " . date("h:i:sa");
?>
    </p>


</html>



