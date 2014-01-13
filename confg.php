<?php

    $con = mysql_connect('sql311.dc7.us','dc7_14229326','sujuod') or die(mysql_error());
    
    if (!$con) {
        echo "Unable to connect to DB: " . mysql_error();
        exit;
    }
 
    if (!mysql_select_db("dc7_14229326_univ")) {
        echo "Unable to select mydbname: " . mysql_error();
        exit;
    }
    
  ?>
