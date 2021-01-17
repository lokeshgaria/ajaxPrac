<?php 
$conn = mysqli_connect("localhost" , "root" , "" , "ajaxcrud");

if ($_FILES['file']['name'] != " ") {
    $filename = $_FILES['file']['name'];
   
    $extension = pathinfo($filename,PATHINFO_EXTENSION);

    $validExtension = array("jpg" , "png" , "jpeg" );

    if (in_array($extension , $validExtension)) {
        $new_name = rand() . "." . $extension;
        $path = "images/".$new_name;

        if (move_uploaded_file( $_FILES['file']['tmp_name'], $path )) {

            $insertQry = "INSERT INTO `mytable` (`id`, `Firstname`, `lastname`) VALUES (NULL, '$path', 'd')";
            $runQery = mysqli_query($conn , $insertQry);
            echo '<img src ="'.$path.'" width="150px" height="100px" />';
        }
    }else{
        echo '<p style="color:red; font-weight:bold;"> invalid format  only jpeg , png are allowed . <p>';
    }
} 

?>