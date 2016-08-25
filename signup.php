<?php
include("header.php");
$login = 0;
$poruka = "";
?>

<section>
    <div class="container white-transparent-background">
        <div class="container-fluid">
            <div class="row">
        <div class="col-xs-8 col-lg-4 col-centered">
            <?php
            if($login == 1){

                echo '<div class="alert alert-danger">'.$poruka.'</div>';
            }
            ?>
            <h3 class="text-align-middle">Register</h3>
                <form role="form" class="form-signup" method="POST" action="signup.php">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <button name="signupSubmit" type="submit" class="btn btn-default">Submit</button>
                </form>
            <!--<form class="form-signin" method="POST" action="register.php">
                <h2 class="form-signin-heading">Please register</h2>
                <label for="user" class="sr-only">Username</label>
                <input id="user" name="user" class="form-control" placeholder="Username" required="" autofocus="">
                <label for="pass" class="sr-only">Password</label>
                <input id="pass" name="pass" class="form-control" placeholder="Password" required="" type="password">
                <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Register</button>
            </form>-->

        </div>
        </div>
            <div class="col-xs-12" style="height:5vh;"></div>
        </div>
    </div>
</section>

<?php
include ("footer.php")
?>
