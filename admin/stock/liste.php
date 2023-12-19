<?php

    session_start();
    include "../../inc/functions.php";
    $stock = getStock();
    ?>
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
    <link href="../../bootstrap-5.0.2-dist/css/bootstraapp.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../bootstrap-5.0.2-dist/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Mery Shop</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../../LogOut.php">LogOut</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <!-- *********** -->
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
              <a class="nav-link " href="../categories/liste.php">
                  <span data-feather="file"></span>
                  Categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../produits/liste.php">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../visiteurs/liste.php">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../stock/liste.php">
                  <span data-feather="bar-chart-2"></span>
                  Stock
                </a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link " href="../profile.php">
                  <span data-feather="layers"></span>
                  Profile
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2" style="color:#e5345b;">stock of products</h1>
            </div>  

          <div>
        
            <?php if(isset($_GET['modif']) && $_GET['modif'] == "ok"){
                print'<div class="alert alert-success">
                Stock is Updated successfully
            </div>';}
                ?>

          
 <table class="table">
  <thead>
    <tr style="color:#e5345b;">
      <th scope="col" >#</th>
      <th scope="col" >product Name</th>
      <th scope="col" >quantity</th>
      <th scope="col" >Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $i=0;
        foreach ($stock as $s){
            $i++;
            print' <tr>
            <th scope="row">'.$i.'</th>
            <td><b>'.$s['nom'].'</b></td>
            <td>'.$s['quantite'].'</td>
            <td>
              <a  class="btn btn-success" data-toggle="modal" data-target="#editModal'.$s['id'].'">Update</a>
             
      
            </td>
          </tr>';
        }
    ?>
   
  </tbody>
</table>

          </div>       
        </main>
      </div>
    </div>

    <?php
    foreach($stock as $index => $stocks){
        ?>
       
        <div class="modal fade" id="editModal<?php echo $stocks['id'];  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit stock of<?php echo $stocks ['nom']; ?> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="modifier.php" method="post">
                    <input type="hidden" value="<?php echo $stocks['id']?>" name="id">
                    <div class="form-group">
                        <input  type="number" name="quantite" required class="form-control" placeholder="product quantity" value="<?php echo $stocks['quantite']?>"  />
                    </div>
               
              </div>
              <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        <?php
    }

?>
        <!-- Button trigger modal -->

        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../bootstrap-5.0.2-dist/js/popper.min.js"></script>
    <script src="../../bootstrap-5.0.2-dist/js/bootstraapp.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
    <script>
      function popUpDeleteCategorie(){
        return confirm("do you really want to delete the category?");
      }
    </script>
  </body>
</html>
