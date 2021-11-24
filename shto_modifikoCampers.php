<?php include './sqlfunctions.php'; ?>
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

<?php 
            if(isset($_POST['shto'])){
                $name=$_POST['name'];
                $surname=$_POST['surname'];
                $address=$_POST['address'];
                $phone=$_POST['phone'];
                $camp=$_POST['camp'];

                shtoCampers($name,$surname,$address,$phone,$camp);
                header('location:campers.php');

            }
            if(isset($_GET['editCamper'])){
                $camper=mysqli_fetch_assoc(camperId($_GET['editCamper']));
            }



            if(isset($_POST['update'])){
                $camperid=$_POST['camperid'];
                $name=$_POST['name'];
                $surname=$_POST['surname'];
                $address=$_POST['address'];
                $phone=$_POST['phone'];
                $camp=$_POST['camp'];

                updateCampers($name,$surname,$address,$phone,$camp,$camperid);
                header('location:campers.php');

            }




?>

<body>
    <!-- ========== Start Header ========== -->

    <?php include './templates/header.php'; ?>

    <!-- ========== End Header ========== -->
    <!-- ========== Start Banner ========== -->
    <section class="banner">
        <div class="container text-center text-light">
            <i class="fas fa-hiking fa-2x mb-2"></i>
            <h1 class="">Campers</h1>
        </div>
    </section>
    <!-- ========== End Banner ========== -->

    <!-- ========== Start Forma ========== -->
    <section class="forma">
        <div class="container d-flex flex-column align-items-center ">

            <form class="w-50 mt-3 p-5 bg-light shadow-lg" method="POST">
                <?php if(isset($_GET['editCamper'])): ?>
                <h1 class="text-center ">Update Camper</h1>
                <?php else: ?>
                <h1 class="text-center ">Join a Camp</h1>
                <?php endif; ?>
                <input type="hidden" name="camperid"
                    value="<?php if(isset($_GET['editCamper'])){ echo $camper['camperid'];}?>">
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name"
                        value="<?php  if(isset($_GET['editCamper'])){ echo $camper['name'];}?>" class="form-control">

                </div>
                <div class="mb-2">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" name="surname"
                        value="<?php  if(isset($_GET['editCamper'])){ echo $camper['surname'];}?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address"
                        value="<?php  if(isset($_GET['editCamper'])){ echo $camper['address'];}?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone"
                        value="<?php  if(isset($_GET['editCamper'])){ echo $camper['phone'];}?>" class="form-control">
                </div>
                <?php $result=merrKampin(); ?>
                <div class="mb-4">
                    <label for="camp" class="form-label">Choose camp</label>
                    <select class="form-select" name="camp" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <?php while($row=mysqli_fetch_array($result)): ?>
                        <option value="<?php  echo $row['campid'];?>"
                            <?php if(isset($_GET['editCamper']))if($row['campid'] == $camper['campid']) echo 'selected' ; ?>>
                            <?php echo $row['name'] ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <?php if(isset($_GET['editCamper'])): ?>
                <button type="submit" name="update" class="btn btn-warning rounded-pill px-5 float-end">Update</button>
                <?php else: ?>
                <button type="submit" name="shto" class="btn btn-warning rounded-pill px-5 float-end">Shto</button>
                <?php endif; ?>

            </form>
        </div>
    </section>
    <!-- ========== End Forma ========== -->




    <!-- ========== Start Footer ========== -->
    <?php include './templates/footer.php'; ?>
    <!-- ========== End Footer ========== -->

</body>

</html>