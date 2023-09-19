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
        <h1 class="page-header text-center">BOOKING</h1>
        <?php if(isset($_SESSION['confirm'])) : ?>
                                                    <div class="alert alert-primary text-center"><?php echo $_SESSION['confirm'];?></div>
                                                <?php
                                                 unset($_SESSION['confirm']);
                                                endif;  
                                                ?>

        <div class="row">


        <?php 
            $booking=new DB();
            $data=$booking->getData('booking');
        ?>
        <div class="col-12">
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>ID</th>
                    <th>DOCTOR_ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>Action</th>
                    
                </thead>
                <?php foreach($data as $k => $v) : ?>
                <tbody>
                    <tr>
                        <td><?php echo $v['id']; ?></td>
                        <td><?php echo $v['doctor_id']; ?></td>
                        <td><?php echo $v['name']; ?></td>
                        <td><?php echo $v['email']; ?></td>
                        <td><?php echo $v['phone']; ?></td>
                        <td><a href="deleteBook.php?id=<?php echo $v['id'];?>" class="btn btn-primary">Confirm</a></td>
                    </tr>

                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    </div>
</body>

</html>