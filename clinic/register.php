<?php
session_start();
require('./handlers.php');
// if ((InputValidator::checkRequest('post')) && (InputValidator::issetpost('email'))) {

//     foreach ($_POST as $key => $value) {
//          $$key = (InputValidator::sanitizeInput($input)) ;
//     }
//  echo $name;

// }
$erorrs=[];  
if (checkrequest('POST') && issetpost('email')) {
    
    foreach ($_POST as $key => $value) {
         $$key = sanitizeinput($value) ;
    }
    
    if (!requiredval($name)) {
        $erorrs['name'] = "name is required";
    }elseif(!minval($name,3)) {
         $erorrs['name'] = "the name must be greater than 3 chars";
    }elseif (!maxval($name,20)) {
        $erorrs['name']= "the name must be less than 20 chars <br>";
      

    }
    if (!requiredval($email)) {
         $erorrs['email']= "Email is required";
    }elseif(!emailval($email)){
        $erorrs['email']= "Email is not valid";
       

    }
    if (!requiredval($password)) {
     $erorrs['password']= "the password is required";
    }elseif (!minval($password,3)) {
        $erorrs['password']= "the password is too short";
    }elseif (!maxval($password,20)) {
        $erorrs['password']= "the password is too longer";
    }
        if (!requiredval($phone)) {
     $erorrs['phone']= "the phone is required";
    }elseif (!minval($phone,10)) {
        $erorrs['phone']= "the phone number is not valid";
    }elseif (!maxval($phone,11)) {
        $erorrs['phone']= "the password is too longer";
        
    }

}
else {
    echo"not supported method";
}
$con= mysqli_connect("localhost","root","","php_clinic");
$sql=mysqli_query($con,"SELECT * FROM users");
while ($row = mysqli_fetch_assoc($sql)){
        if($row['email'] == $email){
        $erorrs['email'] = "Email is already registered";
       
}
}

if (count($erorrs)) {
    $_SESSION['erorrs'] = $erorrs;
    header("location:registerform.php");
    die();
}
    

if (count($erorrs) == 0) {
    $sql = "INSERT INTO users(`email`, `name`, `password`) VALUES ('$email','$name','$password')";
    $result = mysqli_query($con,$sql);
    header("location:loginform.php");
     //echo "data insert succeful";
}
