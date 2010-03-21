<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
if(isset($_SESSION['userloggedin'])){
    unset($_SESSION['userloggedin']);
}
session_destroy();
header('Location:login.php');
?>
