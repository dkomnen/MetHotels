<?php
include("config.php");


function checkIfUserExists($user){
    global $conn;
    $sql = "SELECT * FROM users WHERE username=?";
    $query = $conn->prepare($sql);
    $query->bind_param('s',$user);
    $query->execute();
    $query->store_result();
    if ($query->num_rows > 0) {
        return true;
    } else{
        return false;
    }
    $query->close();
}

function userSignUp($user, $pass, $email, $firstName, $lastName)
{
    global $conn;
    if(!checkIfUserExists($user)){
        $insert = "INSERT INTO users (username,password,email,first_name,last_name) VALUES
(?,?,?,?,?)";
        $query = $conn->prepare($insert);
        $query->bind_param('sssss',$user,md5($pass),$email,$firstName,$lastName);
        $query->execute();
        $query->close();
        return 1;
    } else{
        return 0;
    }
}

function userLogin($user, $pass){
    global $conn;
    $sql = "SELECT username,password,first_name FROM users WHERE username=? AND password=?";
    $query = $conn->prepare($sql);
    $query->bind_param('ss',$user,md5($pass));
    $query->execute();
    $query->store_result();
    $query->bind_result($username,$password,$firstName);
    if ($query->num_rows > 0) {
        while($query->fetch()) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['firstName'] = $firstName;
        }
        $query->free_result();
        $query->close();
        return 1;
    } else{
        $query->free_result();
        $query->close();
        return 0;
    }

    //session_start();
}

function getNameForUsername($username){
    global $conn;
    $sql = "SELECT name FROM user WHERE username=?";
    $query = $conn->prepare($sql);
    $query->bind_param('s',$username);
    $query->execute();
    $query->store_result();
    $query->bind_result($name);
    $returnvalue = "";
    while ($query->fetch()) {
        $returnvalue = $name;
    }
    $query->free_result();
    $query->close();
    return $returnvalue;
    }

/*function sessionStart($user){
    session_start();
    $_SESSION['name'] = getNameForUsername($user);
    session_status();
}*/

/*if(isset($_SESSION['username'])){
    header("Location: index.php");
}*/
if(isset($_POST['signupSubmit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    if(strlen($username) < 5){
        $poruka .= "Username mora imati makar 5 karaktera<br/>";
        $login = 1;
    }
    if(strlen($password) < 5){
        $poruka .= "Password mora imati makar 5 karaktera";
        $login = 1;
    }
    if($poruka == ""){
        if(userSignUp($username,$password,$email,$firstName,$lastName)){
            $_SESSION['username'] = $username;
            header("Location: index.php");
        }else{
            $poruka = "Postoji vec korisnik sa ovim usernameom";
            $login = 1;
        }
    }
}

if(isset($_POST['loginSubmit'])){
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    if(userLogin($username,$password)){
        //header("Location: index.php");
    }else{
        $poruka = "Niste uneli validne podatke";
        $login = 1;
    }
}

if(isset($_POST['logout'])){
    session_destroy();
    header("Location: index.php");
}


?>