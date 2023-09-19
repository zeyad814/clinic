<?php require_once'./inc/navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="page-header text-center">DOCTORS</h1>
        <?php if(isset($_SESSION['action'])) : ?>
        <div class="alert alert-primary text-center"><?php echo $_SESSION['action'];?></div>
        <?php
         unset($_SESSION['action']);
         endif;  
         ?>
<a href="adddoc.php" class="btn btn-primary btn-lg">ADD DOCTOR</a>
        <div class="row">
        <?php 
            $join=new DB();
            $data=$join->getData('doctors');
        ?>
        <div class="col-12">
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>DOCTOR_ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>BIO</th>
                    <th>MAJOR_ID</th>
                    <th>Action</th>
                    
                </thead>
                <?php foreach($data as $k => $v) : ?>
                <tbody>
                    <tr>
                        <td><?php echo $v['id']; ?></td>
                        <td><?php echo $v['name']; ?></td>
                        <td><?php echo $v['email']; ?></td>
                        <td><?php echo $v['bio']; ?></td>
                        <td><?php echo $v['major_id']; ?></td>
                        <td>
                            <a href="deletedoc.php?id=<?php echo $v['id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    </div>
</body>

</html>