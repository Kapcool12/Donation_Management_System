<?php 
session_start();
require_once "../pdo.php";
if(isset($_POST['cancel'])){
    header('Location: ../index.php');
    return;
}
if ( isset($_POST['username'])) {
    if((strlen($_POST['username'])>0) && (strlen($_POST['password'])>=0)){
        $stmt3 = $pdo->query("SELECT `volunteer_id` FROM `volunteer_login` WHERE USERNAME = '".$_POST['username']."' AND PASSWORD ='".$_POST['password']."'");
        $rows2 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
        if(count($rows2)>=1){
           $_SESSION['volunteer_id']=$rows2[0]['volunteer_id'];
           header("Location:../index.php");
           return;
        } else {
            $_SESSION['error']="Wrong Username and Password";
            header("Location: volunteerLogin.php");
            return;
        } 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO - login</title>
    <?php include("bootstrap.php"); ?>
    <link rel="stylesheet" href="login_volunteer.css">
</head>
<body class="text-center">

<?php
    if(isset($_SESSION['success'])){
        echo '<div class="alert alert-success" role="alert">';
        echo $_SESSION['success'];
        unset ($_SESSION['success']);
        echo '</div>' ;
    }

    if(isset($_SESSION['error'])){
        echo '<div class="alert alert-danger" role="alert">';
        echo $_SESSION['error'];
        unset($_SESSION['error']);
        echo '</div>';
    }
?>

    <form action="" class="form-signin" method="post">    
   
     <div class="container">
            <div class="card">
                <div class="inner-box">
                    <div class="card-front">  
    <h3 class="h3 mb-3 font-weight-normal">Volunteer Login</h3>  

    <p><label for="username">Username :</label>
    <input type="text" name = "username" id = "username">
    </p>
    <p><label for="password">Password :</label>
    <input type="password" name = "password" id ="password">
    </p>
    <p><input type="submit" class="btn btn-lg btn-primary btn-bloc" name="submit">  <input type="submit" class="btn btn-lg btn-primary btn-bloc" name="cancel" value = "cancel"></p>

    </form>
    <a class="btn btn-secondary" href="../signup/volunteerSignup.php" role="button">Sign UP »</a>
</div>
</div>
</div>
</div>


</body>
</html>