<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ========== Start Typograhy ========== -->
    <?php include './templates/typography.php'; ?>
    <!-- ========== End Typograhy ========== -->
    <link rel="stylesheet" href="./styles/index.css">
    <title>Document</title>
</head>

<body>
    <!-- ========== Start Header ========== -->
    <?php include './templates/header.php'; ?>
    <!-- ========== End Header ========== -->
    <!-- ========== Start Search-Section ========== -->
    <section class="srch-section mt-4">
        <div class="container rounded-3 p-5">
            <div class="mb-4">
                <h1 class="fw-bold">
                    Welcome to Sunrise <br />
                    Camp
                </h1>
                <p class="text-muted mt-3 w-50">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni non,
                    enim ipsa ducimus cumque accusantium aliquid. Dolorum, doloribus
                    ipsum. In.
                </p>
            </div>
            <div class="input-group mb-3 w-25">
                <input type="text" class="form-control" placeholder="Search for camps" aria-label="Recipient's username"
                    aria-describedby="button-addon2" />
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                    Search
                </button>
            </div>
            <a href="shto_modifikoCampers.php" class=" btn btn-secondary">or Join a Camp</a>
        </div>
    </section>
    <!-- ========== End Search-Section ========== -->

    <!-- ========== Start Campgrounds ========== -->
    <section class="campgrounds my-5">
        <div class="container d-flex justify-content-between flex-wrap gap-4">
            <div class="card p-3 rounded-3">
                <img src="./img/Buloy Springs.jpg" class="card-img-top rounded-3" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Buloy Springs</h5>
                    <p class="card-text text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
                        voluptate.
                    </p>
                    <a href="#" class="btn btn-dark">View Campground</a>
                </div>
            </div>
            <div class="card p-3 rounded-3">
                <img src="./img/Latik Riverside.jpg" class="card-img-top rounded-3" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Latik Riverside</h5>
                    <p class="card-text text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
                        voluptate.
                    </p>
                    <a href="#" class="btn btn-dark">View Campground</a>
                </div>
            </div>
            <div class="card p-3 rounded-3">
                <img src="./img/Calaguas Island.jpg" class="card-img-top rounded-3" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Calagus Island</h5>
                    <p class="card-text text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
                        voluptate.
                    </p>
                    <a href="#" class="btn btn-dark">View Campground</a>
                </div>
            </div>
            <div class="card p-3 rounded-3">
                <img src="./img/Mount Ulap.jpg" class="card-img-top rounded-3" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Mount Ulap</h5>
                    <p class="card-text text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
                        voluptate.
                    </p>
                    <a href="#" class="btn btn-dark">View Campground</a>
                </div>
            </div>
            <div class="card p-3 rounded-3">
                <img src="./img/Onay Beach.jpg" class="card-img-top rounded-3" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Onay Beach</h5>
                    <p class="card-text text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
                        voluptate.
                    </p>
                    <a href="#" class="btn btn-dark">View Campground</a>
                </div>
            </div>
            <div class="card p-3 rounded-3">
                <img src="./img/Seven Sisters Waterfall.jpg" class="card-img-top rounded-3" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Seven Sisters Waterfall</h5>
                    <p class="card-text text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
                        voluptate.
                    </p>
                    <a href="#" class="btn btn-dark">View Campground</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Campgrounds ========== -->
    <!-- ========== Start Banner ========== -->
    <section class="banner">
        <div class="container py-4">
            <div class="row text-light text-center">
                <div class="col-4">
                    <i class="fas fa-hiking fa-4x mb-3"></i>
                    <h2 class="mb-3">Hiking</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Laboriosam, cum.
                    </p>
                </div>
                <div class="col-4">
                    <i class="fas fa-campground fa-4x mb-3"></i>
                    <h2 class="mb-3">Campground</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Laboriosam, cum.
                    </p>
                </div>

                <div class="col-4">
                    <i class="fas fa-tree fa-4x mb-3"></i>
                    <h2 class="mb-3">Mountains</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id
                        similique quidem mollitia dolor!.
                    </p>
                </div>
            </div>
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

    <!-- ========== Start Footer ========== -->
    <?php include './templates/footer.php'; ?>
    <!-- ========== End Footer ========== -->
</body>

</html>