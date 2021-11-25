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
function merrRolin($userid){
    $conn=connection();
    $sql="SELECT roli from user where userid='$userid'";
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
                $_SESSION['roli'] =$row['roli'];
               
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



    function merrKampin(){
        $conn=connection();
        $sql="SELECT * from camp";
        $result=mysqli_query($conn,$sql);
        return $result; 
       }


    function shtoCampers($name,$surname,$address,$phone,$camp){
        $conn=connection();
        $sql="INSERT INTO camper(name,surname,address,phone,campid) VALUES('$name','$surname','$address','$phone','$camp')";
        $result=mysqli_query($conn,$sql) or die(mysqli_errno($conn));
        
        return $result;
    }
    function camperId($camperid){
        $conn=connection();
        $sql="SELECT * from camper where camperid='$camperid'";
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    
    function merrCampers(){
        $conn=connection();
        $sql="SELECT c.*, ca.name as kampi ,ca.start as start ,ca.finish as finish from camper c inner join camp ca on c.campid=ca.campid";
        $result=mysqli_query($conn,$sql);
        return $result;

    }
    function updateCampers($name,$surname,$address,$phone,$camp,$camperid){
        $conn=connection();
        $sql="UPDATE  camper SET name='$name',surname='$surname',address='$address',phone='$phone',campid='$camp' where camperid='$camperid' )";
        $result=mysqli_query($conn,$sql) or die(mysqli_errno($conn));
        
        return $result;
    }


    function deleteCampers($camperid){
        $conn=connection();
        $sql="DELETE from camper where camperid='$camperid'";
        $result=mysqli_query($conn,$sql);
        return $result;
}

    function getCamper($camperid){
        $conn =connection();
        $sql="SELECT * FROM camper where camperid='$camperid'";
        $result=mysqli_query($conn,$sql);
        
        return $result;
    }


    function merrTeam(){
        $conn=connection();
        $sql="SELECT * from team";
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function merrTeamid($teamid){
        $conn=connection();
        $sql="SELECT * from team where teamid='$teamid'";
        $result=mysqli_query($conn,$sql);
        return $result;
    }

    function deleteTeam($teamid){
        $conn=connection();
        $sql="DELETE FROM team where teamid='$teamid'";
        $result=mysqli_query($conn,$sql);
        return $result;
    }

    function shtoTeam($name,$phone,$email){
        $conn=connection();
        $sql="INSERT INTO team(name,phone,email) VALUES('$name','$phone','$email')";
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function updateTeam($name,$phone,$email,$teamid){
        $conn=connection();
        $sql="UPDATE team SET name='$name',phone='$phone',email='$email' where teamid='$teamid'";
        $result=mysqli_query($conn,$sql);
        return $result;
    }

    function merrKampiid($kampiid){
        $conn=connection();
        $sql="SELECT * from camp where campid='$kampiid'";
        $result=mysqli_query($conn,$sql);
        return $result;
    }
  
    function merrCamp(){
        $conn=connection();
        $sql="SELECT c.* , t.name as organizatori from camp c inner join team t on c.teamid=t.teamid";
        $result=mysqli_query($conn,$sql);
        return $result;
    }

    function shtoKampin($name,$location,$start,$finish,$description,$organizer){
        $conn=connection();
        $sql="INSERT INTO camp(name,location,start,finish,description,teamid) VALUES ('$name','$location','$start','$finish','$description','$organizer')";
        $result=mysqli_query($conn,$sql);
        return $result;
    }

    function updateKampin($name,$location,$start,$finish,$description,$organizer,$id){
        $conn=connection();
        $sql="UPDATE camp SET name='$name',location='$location',start='$start',finish='$finish',description='$description',teamid='$organizer' where campid='$id'";
        $result=mysqli_query($conn,$sql);
        return $result;
    }

    function deleteCamp($campid){
        $conn=connection();
        $sql="DELETE FROM camp where campid='$campid'";
        $result=mysqli_query($conn,$sql);
        return $result;
    }
?>