<?php require_once './inc/navbar.php'; ?>
<?php require_once './handlers.php'; ?>
<?php 
    $message=[];
    $id = $_GET['id'];
          if(isset($_POST['name'])){
              $name=$_POST["name"];
              $email=$_POST["email"];
              $phone=$_POST["phone"];
              $booking = new DB();
              $res=$booking->insertData('booking',['doctor_id','name','email','phone'],["$id","$name","$email","$phone"]);
              if($res){
                $message[] = 'thank you for your booking';
             }
          }
          ?>

      <div class="container">
        <nav
          style="--bs-breadcrumb-divider: '>'"
          aria-label="breadcrumb"
          class="fw-bold my-4 h4"
        >
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item">
              <a class="text-decoration-none" href="../index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-decoration-none" href="./index.html">doctors</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              doctor name
            </li>
          </ol>
        </nav>
        <?php 
        
               $doctor= new DB();
               $data=$doctor->getData("doctors","*","id = $id");
        ?>
        <?php foreach($data as $k => $v): ?>
        <div class="d-flex flex-column gap-3 details-card doctor-details">
          <div class="details d-flex gap-2 align-items-center">
            <img
              src="<?php echo $v['image']; ?>"
              alt="doctor"
              class="img-fluid rounded-circle"
              height="150"
              width="150"
            />
            <div class="details-info d-flex flex-column gap-3">
              <h4 class="card-title fw-bold"><?php echo $v['name']; ?></h4>
              <h6 class="card-title fw-bold">
              <?php echo $v['bio']; ?>
              </h6>
            </div>
          </div>  
          <?php endforeach; ?>
          <hr /> 
          <?php
            if(!empty($message)){
            foreach($message as $message){
            echo '<div class="message alert alert-primary" role="alert" onclick="this.remove();">'.$message.'</div>';
            }
            die();
            }
          ?> 
          <form class="form" method="post" action=""> 
            <div class="form-items  ">
              <div class="mb-3">
                <label class="form-label required-label" for="name">Name</label>
                <input type="text" class="form-control" name="name" required />
              </div>
              <div class="mb-3">
                <label class="form-label required-label" for="phone"
                  >Phone</label
                >
                <input type="tel" class="form-control" name="phone" required />
              </div>
              <div class="mb-3">
                <label class="form-label required-label" for="email"
                  >Email</label
                >
                <input type="email" class="form-control" name="email" required />
              </div>
            </div>
            <button type="submit" class="btn btn-primary">
              Confirm Booking
            </button>
          </form>

        </div>
      </div>
    </div>
    <?php require_once 'inc/footer.php'; ?>
