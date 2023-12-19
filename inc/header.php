 <!-- navbar -->
 <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top" style="height: 80px;">
        <div class = "container">
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "index.php" style="margin-left: 0px;padding-top: 0px;">
                <img src = "images/shopping-bag-icon.png" alt = "site icon">
                <span class = "text-uppercase fw-lighter ms-2">MerySHOP</span>
            </a>

        

            <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                <span class = "navbar-toggler-icon"></span>
            </button>

            <div class = "collapse navbar-collapse order-lg-1" id = "navMenu"  style="margin-top:8px;">
                <ul class = "navbar-nav mx-auto text-center">
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "#header">home</a>
                    </li>
             
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-uppercase text-dark mt-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                                foreach($categories as $categorie){
                                print '<li><a class="dropdown-item" href="#">'.$categorie['nom'].'</a></li>';
                                }
                           ?>
                        </ul>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "#collection">collection</a>
                    </li>
                    
                    <?php
                    if(isset($_SESSION['nom'])){
                        print' <li class="nav-item">
                        <a class="nav-link active text-uppercase text-dark mt-2" aria-current="page" href="profile.php">Profile</a>
                      </li>';
                        if(isset($_SESSION['panier']) && is_array($_SESSION['panier'][3])){
                            print' <li class="nav-item">
                            <a class="nav-link active text-uppercase text-dark mt-2" aria-current="page" href="panier.php">Panier<span class="text-danger">('.count($_SESSION['panier'][3]).')</span></a>
                          </li>';
                        }else{
                            print' <li class="nav-item">
                            <a class="nav-link active text-uppercase text-dark mt-2" aria-current="page" href="panier.php">Panier<span >(0)</span></a>
                          </li>';
                        }
                      
                    } else {
                        print '
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase text-dark mt-2" aria-current="page" href="LogIn.php">LogIn</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-uppercase text-dark mt-2" aria-current="page" href="SignUp.php">SignUp</a>
                      </li>'; }
                   ?>
                    <li class = "nav-item px-2 py-2" style="width: 130px;">
                        <a class = "nav-link text-uppercase text-dark" href = "#about">about us</a>
                    </li>

                    <form class="d-flex" style="margin-top:0px;" action="index.php" method="POST">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 130px;height: 50px; margin-left: 40px;border-color: var(--pink);" name="search">
                    <button class="btn btn-outline-success" type="submit" style="width: 100px; height: 50px;background-color: var(--pink);top: 50%;border-color: var(--pink);color:white;">Search</button>
                    </form>
                    <?php
                         if(isset($_SESSION['nom'])){
                            print '<a href="LogOut.php"><img src="images/LogOut.png" alt="" style="width: 40px; height: 40px; position: fixed; top: 10px; right: 0px;"></a>';

                         }
                    ?>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->