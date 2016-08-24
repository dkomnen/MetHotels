<?php
session_start();

include("function.php");
//$pagename = basename($_SERVER['PHP_SELF'],'.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MetHotels</title>

    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/main.css">
</head>
<body>
<header>
    <nav>
        <div class="container-fluid">
            <div class="navbar-header">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="index.php">Home</a></li>
                    <li role="presentation"><a href="#">Rooms</a></li>
                    <li role="presentation"><a href="#">Book</a></li>
                    <li role="presentation"><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>

                        <li><p class="navbar-text">Welcome, <?php if(isset($_SESSION['firstName'])){echo $_SESSION['firstName'];} ?></p></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Not you?</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">
                                                    <button name="logout" type="submit" class="btn btn-primary btn-block">Log out</button>
                                                </div>
                                                <!--<div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> keep me logged-in
                                                    </label>
                                                </div>-->
                                            </form>
                                        </div>
                                        <div class="bottom text-center">
                                            Don't have an account? <a href="signup.php"><b>Sign Up</b></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    <?php } else {?>
                        <li><p class="navbar-text">Already have an account?</p></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">
                                                    <label class="sr-only" for="username">Username</label>
                                                    <input name="loginUsername" type="text" class="form-control" id="loginUsername" placeholder="Username" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="password">Password</label>
                                                    <input name="loginPassword" type="password" class="form-control" id="loginPassword" placeholder="Password" required>
                                                    <div class="help-block text-right"><a href="">Forgot the password ?</a></div>
                                                </div>
                                                <div class="form-group">
                                                    <button name="loginSubmit" type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                </div>
                                                <!--<div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> keep me logged-in
                                                    </label>
                                                </div>-->
                                            </form>
                                        </div>
                                        <div class="bottom text-center">
                                            Don't have an account? <a href="signup.php"><b>Sign Up</b></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>
</header>

