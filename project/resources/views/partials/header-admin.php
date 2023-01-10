<!doctype html>
<html lang="en">

<head>
  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTU MARKET</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= "http://" . $_SERVER['HTTP_HOST'] ?>/resources/css/style.css">

  </head>

<body>


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <!-- offcanvas -->
      <!-- data-bs-target="#offcanvasScrolling" -->
      <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
        aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample">
        </span>
      </button>
      <!-- offcanvas -->
      <a class="navbar-brand fw-bold me-auto" href="/home">HTU MARKET</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="d-flex ms-auto">
          <div class="input-group my-2 my-lg-0">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
              aria-describedby="button-addon2">
            <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
          </div>
        </form>

        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="bi bi-person-circle"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Sidebar -->
  <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">

    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <span class="text-muted small fw-bold px-3">MAIN</span>
          </li>
          <li>
            <a href="/home" class="nav-link px-3 acitve text-white">
              <span class="me-2 "><i class="bi bi-speedometer"></i></span>
              <span class="">Dashboard</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider ">
          </li>
          <li>
            <a href="/stock" class="nav-link  px-3 acitve text-white">
              <span class="me-2 "><i class="bi bi-speedometer"></i></span>
              <span class="">Stock Management</span>
            </a>
          </li>
              <!-- selling dashboard -->
          <li>
            <a class="nav-link px-3 sidebar-link text-white" data-bs-toggle="collapse" href="#collapseExample" role="button"
              aria-expanded="false" aria-controls="collapseExample">
              <span class="me-2"><i class="bi bi-cash-coin"></i></span>
              <span>Selling Dashboard </span>
              <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
            </a>
            <div class="collapse" id="collapseExample">
              <div class="navbar-nav ps-3">
                <ul>
                  <li>
                    <a href="/sales" class="nav-link px-3  text-white">
                      <span class="me-2"><i class="bi bi-bag-plus-fill"></i></span>
                      <span>Add Sales</span>
                    </a>
                    <a href="#" class="nav-link px-3  text-white">
                      <span class="me-2"><i class="bi bi-card-list"></i></span>
                      <span>List Transaction</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          
          <li>
            <a href="/users/create" class="nav-link  px-3 acitve text-white">
              <span class="me-2 "><i class="bi bi-person-add"></i></span>
              <span class="">Create User</span>
            </a>
          </li>

          <li>
            <a href="/users" class="nav-link  px-3 acitve text-white">
              <span class="me-2 "><i class="bi bi-person-lines-fill"></i></span>
              <span class="">List User</span>
            </a>
          </li>

          <li class="my-4">
            <hr class="dropdown-divider ">
          </li>
          <li>
            <a href="/logout" class="nav-link  px-3 acitve text-white">
              <span class="me-2 "><i class="bi bi-box-arrow-left"></i></span>
              <span class=""> logout</span>
            </a>
          </li>

        </ul>
      </nav>

    </div>
  </div>
  <!-- End Sidebar -->

  <!-- Main -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 fw-bold fs-3">Dashbaord</div>
      </div>
    </div>

    <!-- imformativa dashboard -->
    <div class="row">
      <!-- card here  -->
      <div class="col-md-3"></div>
    </div>
    <!-- End imformativa dashboard -->








      <!--========================================
  =             javascript            =
  =========================================-->