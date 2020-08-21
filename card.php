<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>

<?php 
    include 'navbar.php'; 
    include 'dbconnect.php';
    if (isset($_GET['userid'])) {
      $userid = $_GET['userid'];
    }
    
    $id = $_GET['candidateid'];
    $sql = "SELECT * FROM `cards` WHERE serialno = $id";
    $result = mysqli_query($conn,$sql);
    // $sent = 'this is our promises. this is another promises.';
    while ($row = mysqli_fetch_assoc($result)) {
      $candidatename = $row['candidatename'];
      $promises = $row['promises'];
      $slogan = $row['slogan'];
      $logo = $row['candidatelogo'];
      $candidatevote = $row['candidatevote'];
      
      
     
    
     
    }

   

  if(isset($_GET['voted']) && $_GET['voted'] == 'true'){
    $vote = $candidatevote+1;
    $sql = "UPDATE `evm`.`cards` SET `candidatevote` = '$vote' WHERE `cards`.`serialno` = $id";
    $result = mysqli_query($conn,$sql);
    $sql2 = "UPDATE `evm`.`users` SET `voted` = 'true' WHERE `users`.`serialno` = $userid";
    $result2 = mysqli_query($conn,$sql2);
  
    session_unset();
    session_destroy();
  }
  


   
  echo '<section class="text-gray-700 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">'.$candidatename.'
        <br class="hidden lg:inline-block my-4">'.$slogan.'
      </h1>
      <h3>Our promises</h3>
      <p class="mb-8 leading-relaxed">'.$promises.'</p>
      <input type="hidden" id="hideunderbutton" value="'.$id.'">';

      if (isset($_GET['userid'])) {
        echo '<input type="hidden" id="hideunderbuttonuserid" value="'.$userid.'">';
      }
    
     echo '<div class="flex justify-center">';

     if (isset($_GET['userid'])) { 
  $sql = "SELECT * FROM `users` WHERE serialno = $userid";
  $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result)){
    $isvoted = $row['voted'];
    if ($isvoted == 'true') {
      echo '<button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" disabled id="votingbutton">Click here to vote</button>
      <div id="message" style="position: relative;
      
      top: 100px;
      left: 31rem;
      font-size: 26px;
     ">Thank you for voting.</div>';
    }else{
      echo '<button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"  id="votingbutton">Click here to vote</button>';
    }
  }
}

  

       
      
       
       echo '<input type="hidden" id="hidden" value="false">
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="uploads/'.$logo.'">
    </div>
  </div>
</section>';
?>







  

    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>