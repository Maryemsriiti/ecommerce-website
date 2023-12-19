<?php
    include "inc/functions.php";


    $categories = getAllCategories();

    $produit = isset($_GET['id']) ? getProduitById($_GET['id']) : array();

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <link rel = "stylesheet" href = "css/product.css">
    <link rel = "stylesheet" href = "css/main.css">
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
    <!-- navbar -->
    <?php
       include "inc/header.php"
    ?>
    <!-- end of navbar -->
   
   <br>
    <div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img src = "images/<?php echo  $produit['image']; ?> " alt = "product" style="width: 360px; height: 360px;">
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name"><?php echo $produit['nom'] ?></span>
                    <span class = "product-price">$ <?php echo $produit['prix'] ?></span>
                    <div class = "product-rating">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star-half-alt"></i></span>
                        <span>(350 ratings)</span>
                    </div>
                    <p class = "product-description"><?php echo $produit['description'] ?></p>
                   <form action="actions/commander.php" method="POST">
                    <input name="produit" type="hidden" value="<?php echo $produit['id']?>">
                    <input name="quantite" type="number" placeholder="quantity of product">
                    <div class = "btn-groups">
                        <button type = "button" class = "add-cart-btn"><i class = "fas fa-shopping-cart"></i>add to cart</button>   
                        <button type = "submit" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</body>


</html>