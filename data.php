<?php

    require_once("functions.php");
//data.php
//siia p��seb ligi sisseloginud kasutaja
//kui kasutaja ei ole sisse loginud
//siis suunan data.php lehele
   if(!isset($_SESSION["logged_in_user_id"])){
	   header("Location: login.php");
   }

   //kasutaja tahab v�lja logida
   if(isset($_GET["logout"])){
	   //aadressireal on olemas muutuja logout
	   session_destroy();
	   //kustutame k�ik sessioni muutujad ja peatame sessioni
	   
	   header("Logation: login.php");
   }
?>
<p>
    Tere, <?php echo $_SESSION["logged_in_user_email"];?>
	<a href="?logout=1"> Logi v�lja <a>