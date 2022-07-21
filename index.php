<?php
session_start();
if(!isset($_SESSION['prop'])){
   $_SESSION['prop']= array();
}

if(!isset($_SESSION['srei'])){
   $_SESSION['srei']= array();
}



header("Refresh:0; view");

?>