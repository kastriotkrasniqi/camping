<?php session_start(); ?>
<?php include_once './sqlfunctions.php'; ?>
<!-- ========== Start Header ========== -->
<?php

if (isset($_GET['logout'])) {
    session_destroy();
    header('location:login.php');
}
if (isset($_GET['delete'])) {
    $userid = $_GET['delete'];

     deleteUser($userid);
     unset($_SESSION['logged_in']);
     header('location:login.php');
}
if (isset($_GET['edit'])) {
     header('location:editUser.php');
}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand mt-2 mt-lg-0 fs-4" href="index.php">Sunrise Camp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto ms-auto  mb-2 mb-lg-0 fs-5 gap-2  ">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="team.php">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="camps.php">Camps</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="campers.php">Campers</a>
        </li>
      </ul>


      <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) : ?>
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
          data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $_SESSION['name']; ?>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item " href="?logout=    ">Log
              out</a></li>
          <li><a class="dropdown-item " href="?edit">Edit Account</a></li>
          <li><a class="dropdown-item " onClick="return confirm('Are you sure you want to delete ?');"
              href="?delete=<?php echo $_SESSION['userid'];?>">Delete
              account</a></li>
        </ul>
      </div>
      <?php else : ?>
      <a href="login.php" class="btn btn-outline-secondary px-4 ">Log in</a>
      <?php endif; ?>

    </div>
  </div>
</nav>

<!-- ========== End Header ========== -->