<?php 
require_once '../../resources/config.php';
session_start();
session_destroy();

header('Location:'.CPANEL_URL);

 ?>