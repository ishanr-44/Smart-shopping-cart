<?php
include_once('connect.php');

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];

    $sql   ="INSERT INTO contact(name,email,msg) VALUES('$name','$email','$msg')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
    echo"<script>alert('Successful');</script>";
    header('location:contact.php');
    
    }else{
        die(mysqli_error($conn)) ;
    }
   
}
?>