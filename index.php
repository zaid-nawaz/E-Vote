<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="newstyle.css">
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <title>Hello, world!</title>
  </head>
  <body>
<?php 
  include 'navbar.php';
  
?>
<div class="container d-flex" id="maincontainer">
<div class="row row-cols-1 row-cols-md-2 cardsforcandidate">


<?php 
 
  
?>


<?php
include 'dbconnect.php';
$sql = "SELECT * FROM `cards`";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
  $candidateid = $row['serialno'];
  $candidatename = $row['candidatename'];
  $candidatevote = $row['candidatevote'];
  $promises = $row['promises'];
  $slogan = $row['slogan'];
  $logo = $row['candidatelogo'];

  echo '
  <div class="col mb-4">
  <div class="card cared">
    <img src="uploads/'.$logo.'" class="card-img-top imgcard" alt="...">
    <div class="card-body">';
    if(isset($_GET['id'])){
      $userid = $_GET['id'];
      echo ' <a class="text-dark" href="card.php?candidateid='.$candidateid.'&userid='.$userid.'"> <h4 class="card-title">'.$candidatename.'</h4></a>';
    }else{
     echo '<a class="text-dark" href="card.php?candidateid='.$candidateid.'"> <h4 class="card-title">'.$candidatename.'</h4></a>';
    }

   
     echo ' <p class="card-text">'.$slogan.'</p>
      <p class="card-text">Vote : '.$candidatevote.'</p>
    </div>';
 echo  '</div>';
echo '</div>';

}

?>



 
  
  
</div>
<div class="container" id="formcontainer">
<form id="form" action="user.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Voter name</label>
    <input type="text"  name="votername" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    
  </body>
</html>
