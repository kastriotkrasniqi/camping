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
                        <th>Emri dhe Mbiemri</th>
                        <th>Telefoni</th>
                        <th>Email</th>
                        <th>Detyrat</th>
                        <th>Action</th>
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
        </div>
    </section>
    <!-- ========== End team-members ========== -->

    <!-- ========== Start Footer ========== -->
    <?php include './templates/footer.php'; ?>
    <!-- ========== End Footer ========== -->

</body>

</html>