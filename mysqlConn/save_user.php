<?php
$conn=mysqli_connect("localhost","root","","testdb");

if(!$conn){
    die("Conn. failde" . mysqli_connect_error());
}

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';

if($name && $email){
    $sql="insert into users (name,email) values ('$name','$email')";
    if(mysqli_query($conn,$sql)){
        echo "succesful";
    }
    else{
        echo "error" . mysqli_error($conn);
    }
}

else{
    echo "please fill out the form";
}
mysqli_close($conn);