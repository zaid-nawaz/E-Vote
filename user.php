<?php 

    include 'dbconnect.php';

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $name = $_POST['votername'];
       $email = $_POST['email'];
       $showerror = '';
        $sql = "SELECT * FROM `users` WHERE Name = '$name' OR email = '$email'";
        $result = mysqli_query($conn,$sql);
        $numrows = mysqli_num_rows($result);
       if ($numrows == 1) {
            $showerror = 'Username or email already exist.';
            header('location: index.php');
       }else{
        $sql2 = "INSERT INTO `users` ( `Name`, `email`, `voted`) VALUES ( '$name', '$email', 'false')";
        $result2 = mysqli_query($conn,$sql2);
        if ($result2) {
         session_start();
         $_SESSION['name'] = $name;
         $_SESSION['isloggedin'] = true;
            $sql3 = "SELECT * FROM `users` WHERE Name = '$name' AND email = '$email'";
            $result3 = mysqli_query($conn,$sql3);
            while ($row = mysqli_fetch_assoc($result3)) {
                $id = $row['serialno'];
            }
         header('location: index.php?name='.$name.'&email='.$email.'&id='.$id);
        }
       }

        
   } 
    
?>