<?php
session_start();
require "./handlers.php";
$email=null;
$password=null;

  $erorrs=[];  
if (checkrequest() && issetpost('email')) {
    
    foreach ($_POST as $key => $value) {
         $$key = sanitizeinput($value) ;
    }

if (!requiredval($email)){
    $erorrs['email'] = "Email is required";
}else {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    }else {
        $erorrs['email'] = "Invalid email"; 
    }
}
if(!requiredval($password)){
    $erorrs['password'] = "Password is required";
}elseif (!minval($password,3)) {
    $erorrs['password'] = "Password must be at least greater than 3 characters";   
}elseif (!maxval($password,20)) {
    $erorrs['password'] = "Password must be less than 20 characters";
}

}else{
    echo "not supported method";
}
$con= mysqli_connect("localhost","root","","php_clinic");
$sql=mysqli_query($con,"SELECT * FROM users");
while ($row = mysqli_fetch_assoc($sql)){
    if ($row['email'] == $email && $row['password'] == $password && $row['role'] == 'admin') {
        header("Location:../admin/index.php");
        die();
    }elseif($row['email'] == $email && $row['password'] == $password){ 
        $_SESSION['eslam2']=true;
        header("Location:index.php");
        die;
        }else {
        $erorrs['email'] ="email or password was incorrect";
    }
}


// $filename = './users.json';
// $users = json_decode(file_get_contents($filename),true);
// foreach ($sql as $value) {
//     if ($value['email'] == $email && $value['password'] == $password) {
//         $_SESSION['eslam']=true ;
//         header("Location:todo.php");
//         die;
//     }else {
//         $erorrs['email'] ="email or password was incorrect";
//     }
//}
if (count($erorrs) > 0) {
    $_SESSION['erorrs'] = $erorrs;
    header("Location:loginform.php");
    die();
}