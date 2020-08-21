<?php 

include 'dbconnect.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $target_dir = 'uploads/';
        $target_file = $target_dir . $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'],$target_file);
        $pname = $_FILES['photo']['name'];
        

        $name = $_POST['candidatename'];
        $slogan = $_POST['slogan'];
        $promise = $_POST['promise'];

        $sql = "INSERT INTO `cards` (`candidatename`, `candidatevote`, `promises`, `slogan`, `candidatelogo`) VALUES ( '$name', '0', '$promise', '$slogan', '$pname');";

        $result = mysqli_query($conn,$sql);
       header('location: index.php');


    }
    
?>
