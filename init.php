<?php 
  include 'connect.php';
    //Routes

    $tpl='include/templates/'; // Template Directory
    $css='layout/css/'; //css Directory
    $func='include/functions/';
    $js='layout/js/'; //js Directory
    $lang='include/languages/';

   
    include $tpl . 'header.php';
   


    if (!isset($noNavbar)){
          if (isset($HomeNavbar)){
            include $tpl . 'homeNavbar.php'; 
        } 
        else{
            include $tpl . 'Navbar.php'; } 
    }
