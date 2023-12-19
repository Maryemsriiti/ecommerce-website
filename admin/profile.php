
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Dashboard Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-5.0.2-dist/css/bootstraapp.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap-5.0.2-dist/css/dashboard.css" rel="stylesheet">
    <link rel = "stylesheet" href = "../css/main.css">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Mery Shop</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../LogOut.php" >LogOut</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <!-- ********** -->
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="categories/liste.php">
                  <span data-feather="file"></span>
                  Categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="produits/liste.php">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="visiteurs/liste.php">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="stock/liste.php">
                  <span data-feather="bar-chart-2"></span>
                  Stock
                </a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="layers"></span>
                  Profile
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2" style="color:var(--pink);">Dashboard</h1>
          </div>         
        </main>

         
    <section id = "about" class = "py-5">
        <div class = "container">
            <div class = "row gy-lg-5 align-items-center">
                <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class = "title pt-3 pb-5">
                        <h2 class = "position-relative d-inline-block ms-4">Welcome !</h2>
                    </div>
                    <p class = "lead text-muted">Celebrating our first year, MeryShop is your go-to destination for curated style and unbeatable deals. </p>
                    <p>Welcome to MeryShop, where style meets convenience! Established a year ago, we are thrilled to celebrate our first anniversary of curating the latest trends and must-have products for you. Our passion for delivering quality, affordability, and a seamless shopping experience drives us to handpick a diverse range of items that cater to your unique tastes. Whether you're a fashion enthusiast, a tech guru, or someone looking for the perfect gift, we have something for everyone.  </p>
                </div>
                <div class = "col-lg-6 order-lg-0">
                    <img src = "../images/about_us.jpg" alt = "" width="350" height="350" style="margin-left: 200px;">
                </div>
            </div>
        </div>
    </section>
    
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../bootstrap-5.0.2-dist/js/popper.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstraapp.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>

  </body>
</html>
