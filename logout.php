<?php
/**
 * Created by PhpStorm.
 * User: osindi
 * Date: 6/16/19
 * Time: 11:17 AM
 */
session_start();
session_destroy();

header('location:registration.php');


?>