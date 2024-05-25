<?php
	include("./connection.php");
	if($_SERVER['REQUEST_METHOD']=="POST")
    {   
            $email=$_POST['username'];
            $password=$_POST['password'];
            $type=$_POST['type'];
            if ($type=='student'){
                if(!empty($email) && !empty($password))
                {
                    //save to database.
    
                    $query="select *from puc1 where username= '$email' limit 1";
                    $result=mysqli_query($con,$query);
                    if($result)
                    {
                        if($result && mysqli_num_rows($result)>0)
                        {
                            $user_data=mysqli_fetch_assoc($result);
                            if($user_data['password']== $password)
                            {
                                
                                header("Location:studentfinale.php");
                            }
                            else
                            {
                                echo"<script>
                                alert('Wrong email or password');</script>";
                                header("Location:start.php");
                            }
                        }
                        else{
                            $quer="select *from engineer where username= '$email' limit 1";
                            $resul=mysqli_query($con,$quer);
                           
                            if($resul && mysqli_num_rows($resul)>0)
                        { 
                            $user_dat=mysqli_fetch_assoc($resul);
                            if($user_dat['password']== $password)
                            {
                                header("Location:studentfinale.php") ;  
                            }
                            else
                            {
                                echo"<script>
                                alert('Wrong email or password');</script>";
                                header("Location:start.php");
                            }
                        }
                        }
    
    
    
                    }
                    else
                    {
                        echo"<script>
                        alert('Wrong email or password');</script>";
                        header("Location:start.php");
                    }
    
                }
            else
            {
                echo"<script>
                        alert('Wrong email or password');</script>";
                        header("Location:start.php");
            }}
            else{
                if(!empty($email) && !empty($password))
                {
                    //save to database.
    
                    $query="select *from teacher where username= '$email' limit 1";
                    $resu=mysqli_query($con,$query);
                    if($resu)
                    {
                        if($resu && mysqli_num_rows($resu)>0)
                        {
                            $user_da=mysqli_fetch_assoc($resu);
                            if($user_da['password']== $password)
                            {
                                header("Location:finalee.php") ;
                            }
                            else
                            {
                                echo"<script>
                                alert('Wrong email or password');</script>";
                                header("Location:start.php");
                            }
                        }
                    }
                    else
                    {
                        echo"<script>
                        alert('Wrong email or password');</script>";
                        header("Location:start.php");
                    }
    
                }
            else
            {
                echo"<script>
                        alert('Wrong email or password');</script>";
                        head("Location:start.php");
            }
    
    
            }
    
            
        
    }
?>
