<?php 
require_once '../clinic/handlers.php';
session_start();
$Message=null;
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteDATA= new DB();
    $delete=$deleteDATA->deleteData('contacts',"id=$id");
    if($delete) {
        $Message="THE CONTACT IS CONFIRMED THANK YOU";
        $_SESSION['CON']=$Message;
        header('location:contacts.php');
    }
}