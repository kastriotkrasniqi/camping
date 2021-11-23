<?php 

  
    global $conn;


function connection(){

    $conn=mysqli_connect('localhost','root','','sunrisedb');
    
    if(mysqli_connect_errno()) {
        die("Lidhja me databaze deshtoi: ".mysqli_connect_error());
    }

    return $conn;

}
function merrUser($userid){
    $conn=connection();
    $sql="SELECT * FROM user where userid='$userid'";
    $result=mysqli_query($conn,$sql);
    return $result;
}


function merrUserEmail($email){
    $conn=connection();
    $sql="SELECT * FROM user where email='$email'";
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        return true;
    }else{
        return false;
    }
    
}


function shtoUser($name,$surname,$email,$password){
    $conn=connection();

    $sql="INSERT INTO user(name,surname,email,password) VALUES('$name','$surname','$email','$password')";

    $result=mysqli_query($conn,$sql) or mysqli_error($conn);
    
    return $result;
}

function logohu($email,$password){
    $conn=connection();
    $sql = "SELECT * from user where email='$email'";

    $result=mysqli_query($conn,$sql);
    if($result){
       if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                header("Location: index.php");
                session_start();
                $_SESSION['userid'] = $row['userid'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['logged_in'] =true;
                $_SESSION['roli'] = $row['roli'];
            }
        }
        }
    }


    function deleteUser($userid){
        $conn=connection();
        $sql="DELETE FROM user where userid='$userid'";

        $result=mysqli_query($conn,$sql);

        return $result;
    }


    function updateUser($name,$surname,$email,$password,$userid){
        $conn=connection();
        $sql ="UPDATE user SET name='$name',surname='$surname',email='$email',password='$password' where userid='$userid'";

        $result=mysqli_query($conn,$sql);
        
        return $result;
    }   

?>