<?php 
include './sqlfunctions.php';
   $ekziston=false;

if (isset($_POST['register'])) {
    $name=htmlentities($_POST['name']); 
    $surname=htmlentities($_POST['surname']);
    $email=htmlentities($_POST['email']);
    $password=htmlentities($_POST['password']);
    $password=password_hash($password,PASSWORD_DEFAULT);

   
       
        if(merrUserEmail($email)==false){

            shtoUser($name,$surname,$email,$password);
            header("location:login.php");
            
        }else{
            $ekziston=true;
        }
         
   

}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- ========== Start Typography ========== -->
    <?php include './templates/typography.php'; ?>
    <!-- ========== End Typography ========== -->
    <style>
    @import url('./styles/header.css');
    @import url('./styles/footer.css');
    @import url('./styles/login.css');

    .left-side {
        padding-top: 50px !important;

    }

    .error {
        font-size: 15px;
        color: red;
    }

    @media only screen and (max-width: 992px) {
        .left-side {
            height: auto !important;
        }
    }
    </style>
</head>

<body>
    <!-- ========== Start Header ========== -->

    <?php include './templates/header.php'; ?>

    <!-- ========== End Header ========== -->

    <!-- ========== Start Login-form ========== -->
    <section class="login-form d-flex ">
        <div class="container left-side ">

            <form class="col-lg-8 col-12 col-sm-12 p-5 ms-auto me-auto" id="register-form" method="POST">
                <?php if($ekziston == true): ?>
                <div class="alert alert-danger" role="alert">
                    This email already exist!
                </div>
                <?php endif; ?>

                <h2 class="fw-bold mb-2 ">Register</h2>
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control bg-light p-2"
                        value="<?php if(!empty($_POST['name'])){ echo $_POST['name'];}?>" />
                </div>
                <div class="mb-2">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" name="surname" class="form-control bg-light p-2"
                        value="<?php if(!empty($_POST['surname'])){ echo $_POST['surname'];}?>" />
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control bg-light p-2"
                        value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];}?>" />
                    <div id="emailHelp" class="form-text">
                        We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control bg-light p-2"
                        value="<?php if(!empty($_POST['password'])){ echo $_POST['password'];}?>" />
                </div>

                <button type="submit" name="register" class="btn btn-dark w-100 p-2 mb-3">
                    Register
                </button>
                <a href="login.php" class="fw-bold" id="create">Back to Login</a>
            </form>
        </div>

        <div class="right-side col-5 d-none d-lg-block">
            <h1 class="text-light fw-bold text-center">
                Start exploring camps from all around the world.
            </h1>
        </div>
    </section>
    <!-- ========== End Login-form ========== -->
    <!-- ========== Start Footer ========== -->
    <?php include './templates/footer.php'; ?>
    <!-- ========== End Footer ========== -->
    <!-- ========== Start JQUERY ========== -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="./script/validation.js"></script>

    <!-- ========== End JQUERY ========== -->

</body>

</html>