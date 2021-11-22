<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './templates/typography.php'; ?>
    <title>Document</title>
    <style>
    @import url("./styles/banner.css");
    @import url("./styles/header.css");
    @import url("./styles/footer.css");

    .banner {
        height: 180px;

    }

    .banner .container {
        padding-top: 20px;
    }

    .forma {
        background-color: #eef3f6;
        height: 800px;
    }
    </style>
</head>

<body>
    <!-- ========== Start Header ========== -->

    <?php include './templates/header.php'; ?>

    <!-- ========== End Header ========== -->
    <!-- ========== Start Banner ========== -->
    <section class="banner">
        <div class="container text-center text-light">
            <i class="fas fa-campground fa-2x mb-2"></i>
            <h1 class="">Camps</h1>
        </div>
    </section>
    <!-- ========== End Banner ========== -->
    <!-- ========== Start Forma ========== -->
    <section class="forma">
        <div class="container d-flex flex-column align-items-center ">
            <h1 class="mt-5 ">Add/Update Camps</h1>
            <form class="w-50 mt-3 p-5 bg-light shadow-lg">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control">

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <a href="#" class="btn btn-success rounded-pill px-5 float-end">Add</a>
                <a href="#" class="btn btn-warning rounded-pill px-5 float-end">Update</a>
            </form>
        </div>
    </section>
    <!-- ========== End Forma ========== -->




    <!-- ========== Start Footer ========== -->
    <?php include './templates/footer.php'; ?>
    <!-- ========== End Footer ========== -->

</body>

</html>