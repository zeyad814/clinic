<?php require_once './inc/navbar.php'; ?>
<?php require_once './handlers.php'; ?>
<?php 
            $message=null;
          if(isset($_POST['name'])){
              $name=$_POST["name"];
              $email=$_POST["email"];
              $phone=$_POST["phone"];
              $message=$_POST["message"];
              $booking = new DB();
              $res=$booking->insertData('contacts',['name','phone','email','message'],["$name","$phone","$email","$message"]);
              if($res){
                $message= "thank you for your contacting us";
             }
          }
          ?>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">contact</li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
            <?php
            if(!empty($message)){
    
            echo '<div class="message alert alert-primary" role="alert" onclick="this.remove();">'.$message.'</div>';
            
            die();
            }
          ?> 
                <form class="form" method="post" action="">
                    <div class="form-items">
                        <div class="mb-3">
                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="phone">Phone</label>
                            <input type="tel" class="form-control" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="email">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="message">message</label>
                            <textarea class="form-control" name="message" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
    </div>

    <?php require_once './inc/footer.php'; ?> 