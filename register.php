<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" /> -->
    <link rel="stylesheet" href="css/style.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom-style.css" />

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>


<body class="animsition">
        <div class="page-content--bge5" style="height:100%;">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content" style="margin-bottom:20px">
                        <div class="login-logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="CoolAdmin" style="width:220px;height:100px">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Firstname</label>
                                    <input class="au-input au-input--full" type="text" name="fname" placeholder="firstname">
                                </div>
                                <div class="form-group">
                                    <label>Lastname</label>
                                    <input class="au-input au-input--full" type="text" name="lname" placeholder="lastname">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="uname" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="au-input au-input--full" type="tel" name="pnumber" placeholder="phone">
                                </div>
                                <div class="form-group">
                                    <label>Field of Study</label>
                                    <select class="au-input au-input--full" name="study">
                                        <option value="" disabled>select field of study</option>
                                        <option value="comp">computer science</option>
                                        <option value="gen">current affairs</option>
                                        <option value="eng">use of english</option>
                                    </select>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <div class="register-link">
                                <a href="#" class="genric-btn info-border">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include("includes/footer2.php"); ?>