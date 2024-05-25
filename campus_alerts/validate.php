<?php
	include("./connection.php");
	if($_SERVER['REQUEST_METHOD']=="POST")
    {   
        
            $uname=$_POST['username'];
            $eml=$_POST['email'];
            $pass1=$_POST['password1'];
            $pass2=$_POST['password2'];
            
            if($pass1!=$pass2)
            {
                echo"passwords are not matching";

            }
            else{
                
                if(!empty($uname) &&!empty($eml)&&!empty($pass1))
                {
                    $sql="insert into teacher(username,email,password) values('$uname','$eml','$pass1')";
                    mysqli_query($con,$sql);
                    header("location:start.php");
                }
            }   
        }
?>