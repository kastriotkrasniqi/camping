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

if (isset($_GET['kampiid'])) {
    $kampi=mysqli_fetch_assoc(merrKampiid($_GET['kampiid']));
}


if (isset($_POST['add'])) {
    $name=$_POST['name'];
    $location=$_POST['location'];
    $start=$_POST['start'];
    $finish=$_POST['finish'];
    $description=$_POST['description'];
    $organizer=$_POST['organizer'];

    shtoKampin($name, $location, $start, $finish, $description, $organizer);
    header('location:camps.php');
}
if (isset($_POST['update'])) {
    $campid=$_POST['id'];
    $name=$_POST['name'];
    $location=$_POST['location'];
    $start=$_POST['start'];
    $finish=$_POST['finish'];
    $description=$_POST['description'];
    $organizer=$_POST['organizer'];

    updateKampin($name, $location, $start, $finish, $description, $organizer, $campid);
    header('location:camps.php');
}

?>

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

      <form class="col-lg-6 col-12 mt-3 p-5 bg-light shadow-lg" method="POST">
        <h1 class=" ">Add/Update Camps</h1>
        <div class="mb-2">
          <input type="hidden" name="id" value="<?php if (isset($_GET['kampiid'])) {
                        echo $kampi['campid'];
                                                          }?>">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" value="<?php if (isset($_GET['kampiid'])) {
                            echo $kampi['name'];
                               }?>">

        </div>
        <div class="mb-2">
          <label for="location" class="form-label">Location</label>
          <input type="text" name="location" class="form-control" value="<?php if (isset($_GET['kampiid'])) {
                            echo $kampi['location'];
                               }?>">
        </div>
        <div class=" mb-2">
          <label for="start" class="form-label">Start</label>
          <input type="date" name="start" class="form-control" value="<?php if (isset($_GET['kampiid'])) {
                            echo $kampi['start'];
                               }?>">
        </div>
        <div class=" mb-2">
          <label for="finish" class="form-label">Finish</label>
          <input type="date" name="finish" class="form-control" value="<?php if (isset($_GET['kampiid'])) {
                            echo $kampi['finish'];
                               }?>">
        </div>
        <div class=" mb-2">
          <label for="description" class="form-label">Description</label>
          <input type="text" name="description" class="form-control" value="<?php if (isset($_GET['kampiid'])) {
                            echo $kampi['description'];
                               }?>">
        </div>
        <?php $result=merrTeam(); ?>
        <div class="mb-4">
          <label for="organizer" class="form-label">Organizer</label>
          <select class="form-select" name="organizer" id="inputGroupSelect01">

            <?php while ($team=mysqli_fetch_array($result)) : ?>
            <option value="<?php  echo $team['teamid'];?>" <?php if (isset($_GET['kampiid'])) {
                                if ($team['teamid'] == $kampi['teamid']) {
                                    echo 'selected' ;
                                }
                            } ?>>
              <?php echo $team['name']; ?></option>
            <?php endwhile; ?>
          </select>
        </div>
        <?php if (isset($_GET['kampiid'])) : ?>
        <button type="submit" name="update" class="btn btn-warning  px-5 float-end">Update</button>
        <?php else : ?>
        <button type="submit" name="add" class="btn btn-success  px-5 float-end">Add</button>
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