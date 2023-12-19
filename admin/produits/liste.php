<?php

    session_start();
    include "../../inc/functions.php";
    $categories = getAllCategories();
    $produits = getAllProducts();
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
        <!-- ******************* -->
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
              <a class="nav-link" href="../categories/liste.php">
                  <span data-feather="file"></span>
                  Categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">
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
                <a class="nav-link" href="../stock/liste.php">
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
            <h1 class="h2" style="color:#e5345b;">list of Products</h1>
           
            <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add</a>
          </div>  
          <div>
            <?php if(isset($_GET['ajout']) && $_GET['ajout'] == "ok"){
                print'<div class="alert alert-success">
                product is added successfully
            </div>';}
                ?>

            <?php if(isset($_GET['delete']) && $_GET['delete'] == "ok"){
                print'<div class="alert alert-success">
                product is deleted successfully
            </div>';}
                ?>

            <?php if(isset($_GET['modif']) && $_GET['modif'] == "ok"){
                print'<div class="alert alert-success">
                product is Updated successfully
            </div>';}
                ?>

              <?php if(isset($_GET['erreur']) && $_GET['erreur'] == "duplicate"){
                print'<div class="alert alert-success">
                This name already exists
            </div>';}
                ?>
          <div>
          
          <table class="table">
  <thead>
    <tr style="color:#e5345b;">
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($produits as $i=>$p){
            $i++;
            print' <tr>
            <th scope="row">'.$i.'</th>
            <td><b>'.$p['nom'].'</b></td>
            <td>'.$p['description'].'</td>
            <td>
              <a  class="btn btn-success" data-toggle="modal" data-target="#editModal'.$p['id'].'">Update</a>
              <br>
              <br>
              <a onClick="return popUpDeleteProduit()" href="supprimer.php?idproduit='.$p['id'].'" class="btn btn-danger">Delete</a>
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
        <!-- Button trigger modal -->


<!-- Modal Ajout-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="ajout.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="nom" required class="form-control" placeholder="product name">
            </div>
            <div class="form-group">
                <textarea  name="description" required class="form-control" placeholder="product description" ></textarea>
            </div>
            <div class="form-group">
                <input type="number" name="prix" required class="form-control" placeholder="product price">
            </div>
            <div class="form-group">
                <input type="file" name="image" required class="form-control" placeholder="product price">
            </div>
            <div class="form-group">
                <select name="categorie" class="form-control">
                    <?php
                        foreach($categories as $index=>$c ){
                            print '<option value="'.$c['id'].'">'.$c['nom'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input type="number" name="quantite" required class="form-control" placeholder="product quantity">
            </div>
            <input type="hidden" name="createur" value="<?php echo $_SESSION['id'];?>">
       
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- **************** Edit Model -->
<?php
    foreach($produits as $index => $produit){
        ?>
       
        <div class="modal fade" id="editModal<?php echo $produit['id'];  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="modifier.php" method="post">
                    <input type="hidden" value="<?php echo $produit['id']?>" name="id">
                    <div class="form-group">
                        <input type="text" name="nom" required value="<?php echo $produit['nom'];?>" class="form-control" placeholder="category name">
                    </div>
                    <div class="form-group">
                        <textarea  name="description" required class="form-control" placeholder="category description" ><?php echo $produit['description']?></textarea>
                    </div>
                    <div class="form-group">
                    <input type="number" name="prix" required value="<?php echo $produit['prix'];?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" value="<?php echo $produit['image'];?>" class="form-control" >
                    </div>
                    <div class="form-group">
                    <select name="categorie" class="form-control" value="<?php echo $produit['categorie'];?>">
                        <?php
                            foreach($categories as $index=>$c ){
                                print '<option value="'.$c['id'].'">'.$c['nom'].'</option>';
                            }
                        ?>
                    </select>
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
      function popUpDeleteProduit(){
        return confirm("do you really want to delete the product?");
      }
    </script>
  </body>
</html>
