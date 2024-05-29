<?php

session_start();

require_once "connection.php";
$msg="";
if(isset($_POST['upload'])){
    $target="./images/". md5(uniqid(time())).basename($_FILES['image']['name']);
    
    $titlu=$_POST['titlu'];
    $descriere=$_POST['descriere'];

    $sql="INSERT INTO images (titlu, descriere, image) VALUES ('$titlu', '$descriere','$target')";
    mysqli_query($con,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        header('location:admin.php');
    }else{
        $msq="VAi! Vai! Vai!!!";
        echo $msg;
    }
}
?>