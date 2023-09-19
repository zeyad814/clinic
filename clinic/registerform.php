<?php require_once './inc/navbar.php'; ?>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">login</li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
                <form class="form" action="register.php" method="post">
                    <div class="form-items">
                    <?php if(isset($_SESSION['erorrs'])) : ?>
                                                <?php foreach($_SESSION['erorrs'] as $erorr) : ?>
                                                    <div class="alert alert-danger text-center"><?php echo $erorr ; ?></div>
                                                <?php
                                                 endforeach;
                                                 unset($_SESSION['erorrs']);
                                                endif;  
                                                ?>
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
                            <label class="form-label required-label" for="password">password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create account</button>
                </form>
                <div class="d-flex justify-content-center gap-2">
                    <span>already have an account?</span><a class="link" href="./loginform.php"> login</a>
                </div>
            </div>

        </div>
    </div>

    <?php require_once './inc/footer.php'; ?> 