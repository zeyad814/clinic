<?php 
require_once '../clinic/handlers.php';
session_start();
$message=[];
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteDATA= new DB();
    $delete=$deleteDATA->deleteData('doctors',"id=$id");
    if($delete) {
        $message="DOCTOR IS DELETED";
        $_SESSION['action']=$message;
        header('location:doctors.php');
    }
}