<?php

    session_start();
    if(isset($_SESSION['nom'])){
        header('location:profile.php');
    }


    include "inc/functions.php";
    $showRegistrationAlert = 0;
    $categories = getAllCategories();

    if(!empty($_POST)){
       if( AddVisiteur($_POST)){
        $showRegistrationAlert = 1; 
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
       
        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/SignUp.css">
        <link rel = "stylesheet" href = "css/main.css">
         <!-- bootstrap css -->
        <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>SignUp form</title>  
    </head>
    <body>
        <!-- navbar -->
        <?php
            include "inc/header.php"
        ?>
           <!-- end of navbar -->
    
        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
            <img src="images/auth.jpg" alt="" class="form__img" style=" height: 620px; width: 500px;">

                <form action="SignUp.php" class="form__content" method="post">
                    <h1 class="form__title">Welcome</h1>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Email address</label>
                            <input type="text" class="form__input" required name="email">
                        </div>
                    </div>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Full Name</label>
                            <input type="text" required class="form__input" name="nom">
                        </div>
                    </div>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Phone</label>
                            <input type="text" required class="form__input" name="tele">
                        </div>
                    </div>

                    

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Password</label>
                            <input type="password" required class="form__input" name ="mp">
                        </div>
                    </div>

                    <input type="submit" class="form__button" value="SignUp">

                    <div class="form__social">
                        <span class="form__social-text">SignUp with</span>

                        <a href="#" class="form__social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-google' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-instagram' ></i></a>
                    </div>
                </form>
            </div>

        </div>
        </body>
        <!-- ===== MAIN JS ===== -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.10.1/sweetalert2.all.min.js"></script>
        <?php
        if($showRegistrationAlert == 1){
            print  " <script>
            Swal.fire({
            title: 'Success!',
            text: 'création de compte avec succès',
            icon: 'Success',
            confirmButtonText: 'Cool',
            timer : 2000
            })
        </script>";       
        }
         ?>
       
    
</html>