<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo BASE_CSS; ?>">
</head>

<!-- fixed-top -->
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Ninth navbar example">
    <div class="container-xl">
      <a class="navbar-brand" href="index"><span class="text-warning">Glow</span>Guru</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07XL">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index">Home</a>
          </li>
          <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) { ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard">Dashboard</a>
            </li>
            <li class="nav-item">

              <a href="<?php echo BASE_URL; ?>logout" title="Déconnexion" class="btn btn-link">
                <i class="fa fa-user text-dark" aria-hidden="true" style="margin-right:10%;"><?php echo $_SESSION['username']; ?></i>
              </a>
            </li>

          <?php  } ?>
          <?php if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) { ?>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login">Login</a>
            </li>
          <?php  } ?>

        </ul>
        <!-- <form role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form> -->
      </div>
    </div>
  </nav>