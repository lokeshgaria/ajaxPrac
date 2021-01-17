 <?php 
 $conn = mysqli_connect("localhost" , "root" , "" , "ajaxcrud");

 

 if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (isset($_POST['check'])) {
        setcookie('email' , $email , time()+60);
        setcookie('password' , $password , time()+60);
       
        $insert = "INSERT INTO `mytable` (`id`, `Firstname`, `lastname`) VALUES (NULL, '$email', '$password');";

        $ren = mysqli_query($conn , $insert);
    }else{
        setcookie('email' , $email , 60);
        setcookie('password' , $password , 60);
        $insert = "INSERT INTO `mytable` (`id`, `Firstname`, `lastname`) VALUES (NULL, '$email', '$password')";
        $ren = mysqli_query($conn , $insert);
    }
   
 }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <form action="" method="post">
     <input type="email"  value="<?php echo $_COOKIE['email'] ?>" name="email" id="">
     <input type="password"  value="<?php echo $_COOKIE['password'] ?>" name="password" id="">
     <input type="checkbox" name="check" id=""> : Remmember Me
     <input type="submit" value="submit" name="submit">
     </form>
 </body>
 </html>