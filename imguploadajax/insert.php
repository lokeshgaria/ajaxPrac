<?php 
$conn = mysqli_connect("localhost" , "root" , "" , "ajaxcrud");
 
$fname = $_POST['fname'];
$lname = $_POST['lastname'];

$insertQry = " UPDATE `mytable` SET `Firstname` = '$fname', `lastname` = '$lname' WHERE `mytable`.`id` = 20";
$runQery = mysqli_query($conn , $insertQry);
if ($runQery) {
    echo "success";
}else{
    echo "failed";
}
?>