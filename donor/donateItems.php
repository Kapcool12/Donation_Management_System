<?php 
session_start();

if(!isset($_SESSION['donor_id'])){
    die("Login first");
}
if(isset($_POST['cancel'])){
    header('Location: ../index.php');
    return;
}

require_once "../pdo.php";
if ((isset($_POST['item']))){
    if((strlen($_POST['item'])>0)){

        $stmt1 = $pdo->prepare('INSERT INTO `items`(`item`,`donor_id`) VALUES ( :it, :did)');
        $stmt1->execute(array(
            ':it' => $_POST['item'],
            ':did' => $_SESSION['donor_id']
            )
            );
            $_SESSION['success'] = "Item inserted";
            header('Location: ../index.php');
            return;

    }
    else {
        $_SESSION['error']="All fields requred";
        header("Location: donateitems.php");
        return;
   }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items Donate</title>
    <?php include("bootstrap.php");?>
</head>
<body  class="text-center">
<?php
    if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
        unset ($_SESSION['success']);
    }

    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
?>


<div class="row" >
      <div class="col-3"></div>
    <div class="col-6">
      <table class="table shadow-lg p-3 mb-5 bg-light rounded ">
        <h2>ITEMS YOU CAN DONATE</h2>
        <thead class="thead-dark">
          <tr class="">
            <th class="" scope="col">Sno </th>
            <th class="" scope="col">item Name</th>
          </tr>
          <tr>
              <td> 1.</td>
              <td> CLOTHES</td>
         </tr>
         <tr>
              <td> 2.</td>
              <td> STATIONARY</td>
         </tr>
         <tr>
              <td> 3..</td>
              <td> TOYS</td>
         </tr>
         <tr>
              <td> 4..</td>
              <td> BOOKS</td>
         </tr>
        </thead>
</table>
</div>
</div>






    
    <form  class="form-signin" method="post">
    <h1 class="h3 mb-3 font-weight-normal">ENTER FROM ABOVE LIST</h1>
        <p> Donate Items :
        <input type="text"  name="item"/></p>
        </p>
            <input type="submit" class="btn btn-lg btn-primary btn-bloc" value="DONATE">
            <input type="submit" class="btn btn-lg btn-primary btn-bloc" name="cancel" value="CANCEL">
    </form>
</body>
</html>