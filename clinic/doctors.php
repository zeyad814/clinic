<?php require_once './inc/navbar.php'; ?>
<?php require_once './handlers.php'; ?>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="../index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">doctors</li>
                </ol>
            </nav>
            <div class="doctors-grid">
                <?php 
                if (isset($_GET['id'])){
                    $id="=" . $_GET['id'];
                }else{
                    $id="";
                }
                
                     $doctor= new DB();
                    $doctors=$doctor->getData('doctors','*',"major_id$id");
                ?>
                <?php foreach($doctors as $k => $v): ?>
                <div class="card p-2" style="width: 18rem;">
                    <img src="<?php echo $v['image']; ?>" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center"><?php echo $v['name']; ?></h4>
                        <h6 class="card-title fw-bold text-center"><?php echo $v['bio']; ?></h6>
                        <a href="./doctor.php?id=<?php echo $v['id']; ?>" doctor.html" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
            
        </div>
    </div>
    <?php require_once './inc/footer.php'; ?> 