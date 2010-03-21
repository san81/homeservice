<?php
session_start();
if(isset($_SESSION['userloggedin']) && $_SESSION['userloggedin']==true ) {
require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();

} else
    header('Location: login.php');