<?php

    session_start();
    if(isset($_SESSION['nom'])){
      //  header('location:profile.php');
    }


    include "../inc/functions.php";
    $user = true;
    $categories = getAllCategories();

    if(!empty($_POST)){
            $user = ConnectAdmin($_POST); 
            if(is_array($user) && count($user)>0){
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['mp'] = $user['mp'];

                header('location:profile.php');
            }
        }
     

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- ===== CSS ===== -->
        <link rel = "stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.10.1/sweetalert2.min.css'>
        <link rel="stylesheet" href="../css/LogIn.css">
        <link rel = "stylesheet" href = "../css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
         <!-- bootstrap css -->
        <link rel = "stylesheet" href = "../bootstrap-5.0.2-dist/css/bootstrap.min.css">
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Login form</title>  
    </head>
    <body>

         <!-- navbar -->
        <?php
            include "../inc/header.php"
        ?>
        <br>
        <br>
    <!-- end of navbar -->
        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="../images/auth.jpg" alt="" class="form__img" style=" height: 550px; width: 500px;">

                <form action="LogIn.php" method="post" class="form__content">
                    <h1 class="form__title">LogIn To Espace Admin</h1>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Email address</label>
                            <input type="text" class="form__input" name="email">
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Password</label>
                            <input type="password" class="form__input" name="mp">
                        </div>
                    </div>
                    <a href="#" class="form__forgot">Forgot Password?</a>

                    <input type="submit" class="form__button" value="Login">
                    <br>
                    

                    <div class="form__social">
                        <span class="form__social-text">Our login with</span>

                        <a href="#" class="form__social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-google' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-instagram' ></i></a>
                    </div>
                </form>
            </div>

        </div>

    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.10.1/sweetalert2.all.min.js"></script>
    <?php
        if(!$user){
            print  " <script>
            Swal.fire({
            title: 'Error!',
            text: 'Invalid coordinates',
            icon: 'Error',
            confirmButtonText: 'Cool',
            timer : 2000
            })
        </script>";       
        }
         ?>
     <!-- ===== MAIN JS ===== -->
     <script src="../assets/js/main.js"></script>
</html>