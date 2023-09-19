<?php 
require_once '../clinic/handlers.php';
session_start();
$message=[];
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteDATA= new DB();
    $delete=$deleteDATA->deleteData('booking',"id=$id");
    if($delete) {
        $message="BOOKING IS CONFIRMED THANK YOU";
        $_SESSION['confirm']=$message;
        header('location:booking.php');
    }
}