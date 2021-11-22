<?php 
    global $conn;


function connection(){

    $conn=mysqli_connect('localhost','root','','sunrisedb');
    
    if(mysqli_connect_errno()) {
        die("Lidhja me databaze deshtoi: ".mysqli_connect_error());
    }

    return $conn;

}

function merrUserEmail($email){
    $conn=connection();
    $sql="SELECT email FROM user where email='$email'";
    $result=mysqli_query($conn,$sql);
    
    return $result;
    
}


function shtoUser($name,$surname,$email,$password){
    $conn=connection();

    $sql="INSERT INTO user(name,surname,email,password) VALUES('$name','$surname','$email','$password')";

    $result=mysqli_query($conn,$sql) or mysqli_error($conn);
    
    return $result;
}


function logohu($email,$password){
    $conn=connection();
}



?>