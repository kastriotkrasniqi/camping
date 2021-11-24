<?php include './sqlfunctions.php'; ?>
<?php 

        if(isset($_POST['update'])){
            $userid=$_POST['userid'];
            $name=$_POST['name'];
            $surname=$_POST['surname'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $password=password_hash($password,PASSWORD_DEFAULT);
            updateUser($name,$surname,$email,$password,$userid);
         

            header('location:index.php');
            
           
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
    </style>
</head>

<body>
    <!-- ========== Start Header ========== -->

    <?php include './templates/header.php'; ?>

    <!-- ========== End Header ========== -->
    <?php $result= merrUser($_SESSION['userid']);
        $row =mysqli_fetch_array($result);
         ?>
    <!-- ========== Start Login-form ========== -->
    <section class="login-form d-flex">
        <div class="container left-side">

            <form class="w-50" id="edit-form" method="POST">

                <h2 class="fw-bold mb-2 ">Edit Account</h2>
                <input type="hidden" name="userid" value="<?php echo $row['userid'] ?>">
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control bg-light p-2"
                        value="<?php if(!empty($row['name'])){ echo $row['name'];}?>" />
                </div>
                <div class="mb-2">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" name="surname" class="form-control bg-light p-2"
                        value="<?php if(!empty($row['surname'])){ echo $row['surname'];}?>" />
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control bg-light p-2"
                        value="<?php if(!empty($row['email'])){ echo$row['email'];}?>" />
                    <div id="emailHelp" class="form-text">
                        We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control bg-light p-2"
                        value="<?php if(!empty($row['password'])){ echo $row['password'];}?>" />
                </div>

                <button type="submit" name="update" class="btn btn-dark w-100 p-2 mb-3">
                    Update
                </button>

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