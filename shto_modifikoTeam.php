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

<?php if(isset($_GET['editTeam'])){
            $team=mysqli_fetch_assoc(merrTeamid($_GET['editTeam']));
        } 

        if(isset($_POST['add'])){
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            shtoTeam($name,$phone,$email);
            header('location:team.php');
        }
        if(isset($_POST['update'])){
            $teamid=$_POST['id'];
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            updateTeam($name,$phone,$email,$teamid);

            header('location:team.php');
        }

        ?>

<body>
    <!-- ========== Start Header ========== -->

    <?php include './templates/header.php'; ?>

    <!-- ========== End Header ========== -->
    <!-- ========== Start Banner ========== -->
    <section class="banner">
        <div class="container text-center text-light">
            <i class="fas fa-users fa-2x mb-2"></i>
            <h1 class="">Team</h1>
        </div>
    </section>
    <!-- ========== End Banner ========== -->
    <!-- ========== Start Forma ========== -->
    <section class="forma" id="forma">
        <div class="container d-flex flex-column align-items-center ">

            <form class="w-50 mt-3 p-5 bg-light shadow-lg" method="POST">
                <?php if(isset($_GET['editTeam'])): ?>
                <h1 class=" text-center">Update Team</h1>
                <?php else: ?>
                <h1 class=" text-center">Add Team</h1>
                <?php endif; ?>
                <div class="mb-2">
                    <input type="hidden" name="id" value="<?php if(isset($_GET['editTeam'])) echo $team['teamid'] ?>">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="<?php if(isset($_GET['editTeam'])) echo $team['name'] ?>"
                        class="form-control">

                </div>

                <div class="mb-2">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" name="phone" value="<?php if(isset($_GET['editTeam'])) echo $team['phone'] ?> "
                        class=" form-control">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="<?php if(isset($_GET['editTeam'])) echo $team['email'] ?> "
                        class="form-control">
                </div>


                <?php if(isset($_GET['editTeam'])): ?>
                <button type="submit" name="update" class="btn btn-warning rounded-pill px-5 float-end">Update</button>
                <?php else: ?>
                <button type="submit" name="add" class="btn btn-success rounded-pill px-5 float-end">Add</button>
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