<?php
session_start();
if(!isset($_SESSION['lang']))
$_SESSION['lang']="en";
elseif(isset($_GET['lang']) && $_SESSION['lang'] !=$_GET['lang'] && !empty($_GET['lang'])){
    if($_GET['lang'] == "en"){
        $_SESSION['lang'] = "en";        
    }
    elseif($_GET['lang'] == "ur"){
        $_SESSION['lang'] = "ur";
    }

}
require_once "languages/". $_SESSION['lang']. ".php";
?>