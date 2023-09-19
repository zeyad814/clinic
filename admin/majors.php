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
        <h1 class="page-header text-center">MAJORS</h1>

        <div class="row">

            <form action="add.php" method="post" class="form border p-2 my-5">

       

        <input class="form-control btn btn-primary my-3" type="submit" name="save" value="ADD MAJOR"
            placeholder="enter the task">
        </form>
        <?php 
            $major=new DB();
            $data=$major->getData('majors');
        ?>
        <div class="col-12">
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>ID</th>
                    <th>TITLE</th>
                    
                </thead>
                <?php foreach($data as $k => $v) : ?>
                <tbody>
                    <tr>
                        <td><?php echo $v['id']; ?></td>
                        <td><?php echo $v['title']; ?></td>
                    </tr>

                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    </div>
</body>

</html>