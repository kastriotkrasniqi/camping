<?php include './sqlfunctions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.0.2 -->
    <!-- ========== Start Typography ========== -->
    <?php include './templates/typography.php'; ?>
    <!-- ========== End Typography ========== -->

    <style>
    @import url("./styles/banner.css");
    @import url("./styles/header.css");
    @import url("./styles/footer.css");



    .team {
        background-color: #f9f6f1;
    }

    .team img {
        height: 240px;
    }
    </style>
</head>

<?php 
                if(isset($_GET['deleteTeam'])){
                    $teamid=$_GET['deleteTeam'];

                    deleteTeam($teamid);
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
            <i class="fas fa-users fa-4x mb-2"></i>
            <h1 class="">Team</h1>
        </div>
    </section>
    <!-- ========== End Banner ========== -->

    <!-- ========== Start Team ========== -->
    <section class="team">
        <div class="container py-5">
            <h2 class="text-decoration-underline text-center mb-3">
                Organizing Group
            </h2>
            <p class="text-center text-secondary mb-5">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br />
                Facilis repudiandae velit mollitia vero soluta natus odio ab error
                assumenda qui!
            </p>
            <div class="row text-center">
                <div class="col-4">
                    <img src="./img/portrait-1.jpg" class="rounded-3 mb-3" alt="" />
                    <h5>Alita Avilius</h5>
                    <p class="text-secondary">Director</p>
                </div>
                <div class="col-4">
                    <img src="./img/portrait2.jpg" class="rounded-3 mb-3" alt="" />
                    <h5>Odell Cody</h5>
                    <p class="text-secondary">Manager</p>
                </div>
                <div class="col-4">
                    <img src="./img/portrait3.jpg" class="rounded-3 mb-3" alt="" />
                    <h5>Lyndsea Geraldine</h5>
                    <p class="text-secondary">Financer</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Team ========== -->


    <!-- ========== Start team-members ========== -->
    <section class="tabela">
        <div class="container">
            <h4 class="text-secondary fw-bold">Team Members</h4>
            <table border="1" class="table table-striped my-4">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>

                        <?php if(isset($_SESSION['roli'])):
                        if($_SESSION['roli'] ==1): ?>
                        <th>Edit</th>
                        <th>Delete</th>
                        <?php endif; endif; ?>

                    </tr>
                    <?php $result=merrTeam(); ?>
                    <?php while($row=mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['phone'] ?></td>


                        <?php if(isset($_SESSION['roli'])):
                        if($_SESSION['roli'] ==1): ?>
                        <td><a href="shto_modifikoTeam.php?editTeam=<?php echo $row['teamid'];?>"><i
                                    class="far fa-edit fs-5 d-flex justify-content-center text-warning"></i></a>
                        </td>
                        <td><a href="?deleteTeam=<?php echo $row['teamid'];?>"><i
                                    class="far fa-trash-alt fs-5 d-flex justify-content-center text-danger"></i></a>
                        </td>

                        <?php endif; endif; ?>


                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php if(isset($_SESSION['roli'])):
                        if($_SESSION['roli'] ==1): ?>
            <a href="shto_modifikoTeam.php" class="btn btn-success float-end">Shto team</a>
            <?php endif; endif; ?>
        </div>
    </section>
    <!-- ========== End team-members ========== -->

    <!-- ========== Start Footer ========== -->
    <?php include './templates/footer.php'; ?>
    <!-- ========== End Footer ========== -->

</body>

</html>