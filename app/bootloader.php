<!-- The initial file that executes and can redirect other files to be executed
 Models, Views, Libraries will be redircted through the bootloader -->

<?php 
    //Load Configutation Files
    require_once "config/config.php";

    //Load Libraries
    require_once "libraries/Core.php";
    require_once "libraries/Controller.php";
    require_once "libraries/Database.php";

    //Load Helpers
    require_once "helpers/URL_Helper.php";
    require_once "helpers/Session_Helper.php";

?>