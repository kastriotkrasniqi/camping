<?php include_once './sqlfunctions.php'; ?>
<?php 

$jologuar=false;
if (isset($_POST['login'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    logohu($email,$password);
    if (!isset($_SESSION['logged_in'])){
        $jologuar=true;
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
    <link rel="stylesheet" href="./styles/login.css">
</head>
<style>
.error {
    font-size: 15px;
    color: red;
}
</style>

<body>
    <!-- ========== Start Header ========== -->

    <?php include './templates/header.php'; ?>

    <!-- ========== End Header ========== -->

    <!-- ========== Start Login-form ========== -->
    <section class="login-form d-flex">
        <div class="container left-side">
            <form class="w-50" id="login-form" method="POST">
                <?php if($jologuar==true): ?>
                <div class="alert alert-danger" role="alert">
                    Incorrect Data!
                </div>
                <?php endif; ?>
                <h2 class="fw-bold mb-4">Login</h2>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control bg-light p-2 mb-1"
                        value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];}?>" />
                    <div id="emailHelp" class="form-text">
                        We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="mb-5">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control bg-light p-2 mb-1"
                        value="<?php if(!empty($_POST['password'])){ echo $_POST['password'];}?>" />
                </div>
                <button type="submit" name="login" class="btn btn-dark w-100 p-2 mb-4">Login</button>
                <p href="" class="text-secondary">
                    Not a user yet?
                    <a href="register.php" class="fw-bold" id="create">Create an account</a>
                </p>
            </form>
        </div>

        <div class="right-side">
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