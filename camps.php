<?php include './sqlfunctions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.0.2 -->
  <!-- ========== Start Typograhy ========== -->
  <?php include './templates/typography.php'; ?>
  <!-- ========== End Typograhy ========== -->

  <style>
  @import url("./styles/banner.css");
  @import url("./styles/header.css");
  @import url("./styles/footer.css");

  .campgrounds .card {
    width: 362px;
  }

  .campgrounds img {
    height: 183px;
    width: 330px;
  }

  .campgrounds {
    background-color: #eef3f7;
    padding-top: 70px;
    padding-bottom: 70px;
  }
  </style>
</head>

<?php if (isset($_GET['deletecamp'])) {
            $campid = $_GET['deletecamp'];
            deleteCamp($campid);

            header('location:camps.php');
}  ?>


<body>
  <!-- ========== Start Header ========== -->
  <?php include './templates/header.php'; ?>

  <!-- ========== End Header ========== -->

  <!-- ========== Start Banner ========== -->
  <section class="banner">
    <div class="container text-center text-light">
      <i class="fas fa-campground fa-4x mb-2"></i>
      <h1 class="">Camps</h1>
    </div>
  </section>
  <!-- ========== End Banner ========== -->
  <!-- ========== Start Campgrounds ========== -->
  <section class="campgrounds">
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

  <!-- ========== Start Camps ========== -->
  <section class="tabela">
    <div class="container">
      <h4 class="text-secondary fw-bold">Camps</h4>
      <table border="1" class="table table-striped my-4">
        <tbody>
          <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Start</th>
            <th>Finish</th>
            <th class="d-none d-md-block">Description</th>
            <th>Organizer</th>
            <?php if (isset($_SESSION['roli'])) :
                            if ($_SESSION['roli'] == 1) : ?>
            <th>Edit</th>
            <th>Delete</th>
            <?php endif;
                        endif; ?>

          </tr>
          <?php $result = merrCamp(); ?>
          <?php while ($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['location'] ?></td>
            <td><?php echo $row['start'] ?></td>
            <td><?php echo $row['finish'] ?></td>
            <td class="d-none d-md-block"><?php echo $row['description'] ?></td>
            <td><?php echo $row['organizatori']; ?></td>
            <?php if (isset($_SESSION['roli'])) :
                            if ($_SESSION['roli'] == 1) : ?>
            <td><a href="shto_modifikoKampet.php?kampiid=<?php echo $row['campid']?>"><i
                  class="far fa-edit fs-5 d-flex justify-content-center text-warning"></i></a>
            </td>
            <td><a href="?deletecamp=<?php echo $row['campid']?>"><i
                  class="far fa-trash-alt fs-5 d-flex justify-content-center text-danger"></i></a>
            </td>
            <?php endif;
                        endif; ?>
          </tr>

          <?php endwhile; ?>

        </tbody>
      </table>
      <?php if (isset($_SESSION['roli'])) :
                if ($_SESSION['roli'] == 1) : ?>
      <a href="shto_modifikoKampet.php" class="btn btn-success float-end">Shto kampe</a>
      <?php endif;
            endif; ?>
    </div>
  </section>
  <!-- ========== End Camps ========== -->

  <!-- ========== Start Footer ========== -->
  <?php include './templates/footer.php'; ?>
  <!-- ========== End Footer ========== -->
</body>

</html>