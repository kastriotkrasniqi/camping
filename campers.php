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
    <link rel="stylesheet" href="./styles/campers.css" />
    <style>
    @import url("./styles/banner.css");
    @import url("./styles/header.css");
    @import url("./styles/footer.css");

    .camper-photos {
        background-color: #eef3f7;
    }

    .camper-photos .container {
        padding-top: 20px;
        padding-bottom: 80px;
    }

    strong {
        color: #0b8ab7;
        border-bottom: 1px solid #0b8ab7;
    }

    .container p {
        margin-bottom: 30px;
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
            <i class="fas fa-hiking fa-4x mb-2"></i>
            <h1 class="">Campers</h1>
        </div>
    </section>
    <!-- ========== End Banner ========== -->
    <!-- ========== Start Campers-Photos ========== -->
    <section class="camper-photos pt-5">
        <div class="container text-center">
            <strong class="mb-5">Gallery</strong>
            <h2 class="mt-4 mb-3">See our photos and enjoy</h2>
            <p class="text-secondary">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id accusamus
                excepturi voluptatum veniam voluptas fugiat?
            </p>
            <div class="row mb-3">
                <div class="photo1 col-4">
                    <img src="./img/campers/photo-1.jpg" class="img-fluid rounded-3" alt="" />
                </div>
                <div class="photo2 col-4">
                    <img src="./img/campers/photo-2.jpg" class="img-fluid rounded-3" alt="" />
                </div>
                <div class="photo3 col-4">
                    <img src="./img/campers/photo7.jpg" class="img-fluid rounded-3" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="photo4 col-4">
                    <img src="./img/campers/photo5.jpg" class="img-fluid rounded-3" alt="" />
                </div>

                <div class="photo5 col-4">
                    <img src="./img/campers/photo6.jpg" class="img-fluid rounded-3" alt="" />
                </div>
                <div class="photo6 col-4">
                    <img src="./img/campers/photo8.jpg" class="img-fluid rounded-3" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Campers-Photos ========== -->

    <!-- ========== Start Campers ========== -->
    <section class="tabela">
        <div class="container">
            <h4 class="text-secondary fw-bold">Campers</h4>
            <table border="1" class="table table-striped my-4">
                <tbody>
                    <tr>
                        <th>Emri dhe Mbiemri</th>
                        <th>Telefoni</th>
                        <th>Email</th>
                        <th>Detyrat</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <tr>
                        <td>Berat Perçuku</td>
                        <td>044/000000</td>
                        <td>berat.percuku@probit-kos.com</td>
                        <td>Programer ne WEB</td>
                        <td><i class="far fa-edit fs-5 d-flex justify-content-center text-danger"></i></td>
                        <td><i class="far fa-trash-alt fs-5 d-flex justify-content-center text-warning"></i></td>
                    </tr>
                    <tr>
                        <td>Burim Avdiu</td>
                        <td>044/000000</td>
                        <td>burim.avdiu@probit-kos.com</td>
                        <td>Programer ne Java</td>
                        <td>3 vite</td>
                    </tr>
                    <tr>
                        <td>Armend Shabani</td>
                        <td>044/000000</td>
                        <td>armend.shabani@probit-kos.com</td>
                        <td>Programer ne WEB</td>
                        <td>3 vite</td>
                    </tr>
                    <tr>
                        <td>Berat Perçuku</td>
                        <td>044/000000</td>
                        <td>berat.percuku@probit-kos.com</td>
                        <td>Programer ne WEB</td>
                        <td>3 vite</td>
                    </tr>
                    <tr>
                        <td>Burim Avdiu</td>
                        <td>044/000000</td>
                        <td>burim.avdiu@probit-kos.com</td>
                        <td>Programer ne Java</td>
                        <td>3 vite</td>
                    </tr>
                    <tr>
                        <td>Armend Shabani</td>
                        <td>044/000000</td>
                        <td>armend.shabani@probit-kos.com</td>
                        <td>Programer ne WEB</td>
                        <td>3 vite</td>
                    </tr>
                    <tr>
                        <th>Emri dhe Mbiemri</th>
                        <th>Telefoni</th>
                        <th>Email</th>
                        <th>Detyrat</th>
                        <th>Action</th>
                    </tr>
                </tbody>
            </table>
            <a href="shto_modifikoKampet.php" class="btn btn-success rounded-pill px-5 float-end">Add Camps</a>
        </div>
    </section>
    <!-- ========== End Campers ========== -->

    <!-- ========== Start foooter ========== -->
    <?php include './templates/footer.php'; ?>
    <!-- ========== End foooter ========== -->
</body>

</html>