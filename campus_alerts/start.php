<?php
	include("./connection.php");
	if(isset($_POST['sr-btn']))
    {   
        if($_POST['year']=='p1'|| $_POST['year']=='p2'){
            $uname=$_POST['username'];
            $eml=$_POST['email'];
            $pass1=$_POST['password1'];
            $pass2=$_POST['password2'];
            $year=$_POST['year'];
            $sec=$_POST['section'];
            $block=$_POST['block'];
            $floor=$_POST['floor'];
            $room=$_POST['roomno'];
            $mess=$_POST['mess'];

            if($pass1!=$pass2)
            {
                echo"passwords are not matching";
            }
            else{
                if(!empty($uname)&&!empty($pass1))
                {
                    $sql="insert into puc1(username,email,password,year,section,block,floor,roomno,mess) values('$uname','$eml','$pass1','$year','$sec','$block','$floor','$room','$mess')";
                    $result=mysqli_query($con,$sql); 
                                   
                    echo"<script>
                    alert('successfully registered');</script>";
                }
            }
        }
        
            
               
 if(isset($_POST['sr-btn']))
 {   
     if($_POST['year']=='E1'|| $_POST['year']=='E2' || $_POST['year']=='E3'|| $_POST['year']=='E4'){
       
         $uname=$_POST['username'];
         $eml=$_POST['email'];
         $pass1=$_POST['password1'];
         $pass2=$_POST['password2'];
         $year=$_POST['year'];
         $branch=$_POST['branch'];
         $sec=$_POST['branchSection'];
         $block=$_POST['block'];
         $floor=$_POST['floor'];
         $room=$_POST['roomno'];
         $mess=$_POST['mess'];
        echo"<script>alert($sec);</script>";
         if($pass1!=$pass2)
         {
             echo"passwords are not matching";
         }
         else{
             if(!empty($uname)&&!empty($pass1))
             {
                 
                 $sql="insert into engineer(username,email,password,year,branch,section,block,floor,roomno,mess) values('$uname','$eml','$pass1','$year','$branch','$sec','$block','$floor','$room','$mess')";
                 $result=mysqli_query($con,$sql); 
                                
                 echo"<script>
                 alert('successfully registered');</script>";
             }
         }
     }
     
 }
}
?>
<html>
    <head>
        <title>
            Sing in & Sign up
        </title>
        <meta charset="UTF-8">
    <title>Sign in & Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        /* Add your responsive styles here */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            .content h2 {
                font-size: 24px;
            }
            .content p {
                font-size: 16px;
            }
        }

        /* Add more media queries as needed for different screen sizes */
    </style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content ="IE-edge">

        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <img src="rguktlogo.webp"class="small-logo">
        <label class="head">RAJIV GANDHI UNIVERSITY OF KNOWLEDGE TECHNOLOGIES -ANDHRA PRADESH</label>
        <p class="sub-head">&emsp;&emsp;&emsp;&emsp;Catering to the Educational Needs of Gifted Rural Youth of Andhra Pradesh<br>
            (Established by the Govt. of Andhra Pradesh and recognized as per Section 2(f) of UGC Act, 1956)</p>
            <div class="content"><h2>Connecting campus life <br>
            <span>with notification alerts.</span></h2>
        <p>Our web application empowers the college community through<br> seamless connectivity and timely notifications, bridging students <br>and staff for an elevated college experience. Stay informed, <br>engaged, and connected with the latest updates, events, <br>and information all in one place.</p></div>
        
        <div class="wrapper">

           <div class="form-container student">
         
            <form class="questions-form" method="post">
                <div id="stu-regi1">
                    <div class="form-group">
                        <input type="text" placeholder="username"name="username"required>
                        
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password1"required>
                        
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="confirm password" name="password2" required>
                        
                    </div>
                    <input type="hidden" name="action" value="signup">
                    <input type="hidden" name="type" value="student">
                    <p class="btn"name="signup" onclick="showdetails()"style="padding-left:40%;padding-top:5px;">sign up</p>
                    <div class="link">
                        <p>You already have an account?<a href="#" class="signin-link"> sign in</a></p>
                    </div>
                </div>
                <div id="stu-regi">
                <label for="year">Which year are you studying?</label>
                <select id="year" name="year" onchange="showSectionOrBranch()">
                    <option value="">select Year</option>
                    <option value="p1">P1</option>
                    <option value="p2">P2</option>
                    <option value="E1">E1</option>
                    <option value="E2">E2</option>
                    <option value="E3">E3</option>
                    <option value="E4">E4</option>
                </select>
        
                <div id="sectionOrBranch"></div>
                <div id="hostelBlock"></div>
                <div id="floor"></div>
                <div id="roomNo"></div>
                <div id="Mess"></div>
        
                <!-- Other student information fields go here -->
        
                <button type="submit" class="btns" name="sr-btn">Register</button>
                </div>
            </form>
            </div>
            <div class="wrapper">
                <div class="form-container teacher">
                    <form method="post" action='validate.php'>
                        <h2>sign up</h2>
                        <div class="form-group">
                            <input type="text" placeholder="username"name="username"required>
                            
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password1"required>
                            
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="confirm password" name="password2" required>
                            
                        </div>
                        <input type="hidden" name="action" value="signup">
                        <button type="submit" class="btn"name="signup">sign up</button>
                        <div class="link">
                           
                        </div>
                    </form>
                 </div>
             
            <div class="form-container sign-up">
                <form action="#">
                    <h2>Register</h2>
                    <div class="link">
                        <button  class="btnr teacher-link">Teacher</button>
                        </div>
                    <div class="link">
                   <button  class="btnr student-link">Student</button>
                   </div>
                   <div class="link">
                        <p>you already have an account?<a href="#"class="signn-link">sign-in</a></p>
                    </div>
                </form>
            </div>
            
            <div class="form-container forgot">
                <form action= method="post">
                    <h2>Forgot</h2>
                    <div class="form-group"><input type="text" placeholder="username" name="username" required></div>
                    <div class="form-group"><input type="password" placeholder="password" name="passwords" required></div>
                    <div class="forgot-pass"><a href="#">forgot password?</a></div>
                    <button type="submit" class="btn">login</button>
                    <div class="link">
                        <p>Don't have an account?<a href="#"class="sign-link">sign-in</a></p>
                    </div>

                </form>
            </div>
            <div class="form-container sign-in">
                <form method="post"action="login.php">
                    <h2>login</h2>
                    <div class="form-group"><input type="text" name="username"placeholder="username" required></div>
                    <div class="form-group"><input type="password" name="password"placeholder="password" required></div>
                    <input  class="rad"type="radio" name="type" value="teacher"><label style="font-family:'poppins',sans-serif;font-size: 20px;">Teacher</label>
                    <input style="margin-left: 10px;" class="rad"type="radio" name="type" value="student"><label style="font-family:'poppins',sans-serif;font-size: 20px;">Student</label>
                    <div style="display:none;"class="forgot-pass link"><a href="#" class="forgot-link">forgot password?</a></div>
                    
                    <button type="submit" class="btn" >login</button>
                    <div class="link">
                        <p>Don't have an account?<a href="#"class="signup-link">sign-up</a></p>
                    </div>

                </form>
            </div>
        </div>
    </body>
    <script>
        let Wrapper=document.querySelector('.wrapper'),
        signUpLink=document.querySelector('.link .signup-link'),
        signInLink=document.querySelector('.link .signin-link'),
        signLink=document.querySelector('.link .sign-link'),
        forgotLink=document.querySelector('.link .forgot-link');
        studentLink=document.querySelector('.link .student-link');
        teacherLink=document.querySelector('.link .teacher-link');
        signnLink=document.querySelector('.link .signn-link');
        
        
        signUpLink.addEventListener('click',()=> {
            Wrapper.classList.add('animated-signin');
            Wrapper.classList.remove('animated-signup');
            Wrapper.classList.remove('animated-forgot');
            Wrapper.classList.remove('animated-sign');
            Wrapper.classList.remove('animated-student');
            Wrapper.classList.remove('animated-teacher');
            Wrapper.classList.remove('animated-signn');
        });
        signLink.addEventListener('click',()=> {
            Wrapper.classList.add('animated-sign');
            Wrapper.classList.remove('animated-signin');
            Wrapper.classList.remove('animated-signup');
            Wrapper.classList.remove('animated-forgot');
            Wrapper.classList.remove('animated-student');
            Wrapper.classList.remove('animated-teacher');
            Wrapper.classList.remove('animated-signn');
        });

        signInLink.addEventListener('click',()=> {
            Wrapper.classList.add('animated-signup');
            Wrapper.classList.remove('animated-signin');
            Wrapper.classList.remove('animated-forgot');
            Wrapper.classList.remove('animated-sign');
            Wrapper.classList.remove('animated-student');
            Wrapper.classList.remove('animated-teacher');
            Wrapper.classList.remove('animated-signn');
        });

        forgotLink.addEventListener('click',()=> {
            Wrapper.classList.add('animated-forgot');
            Wrapper.classList.remove('animated-signup');
            Wrapper.classList.remove('animated-signin');
            Wrapper.classList.remove('animated-sign');
            Wrapper.classList.remove('animated-student');
            Wrapper.classList.remove('animated-teacher');
            Wrapper.classList.remove('animated-signn');
        });
        studentLink.addEventListener('click',()=> {
            Wrapper.classList.add('animated-student');
            Wrapper.classList.remove('animated-signup');
            Wrapper.classList.remove('animated-signin');
            Wrapper.classList.remove('animated-sign');
            Wrapper.classList.remove('animated-forgot');
            Wrapper.classList.remove('animated-teacher');
            Wrapper.classList.remove('animated-signn');
        });

        teacherLink.addEventListener('click',()=> {
            Wrapper.classList.add('animated-teacher');
            Wrapper.classList.remove('animated-signup');
            Wrapper.classList.remove('animated-signin');
            Wrapper.classList.remove('animated-sign');
            Wrapper.classList.remove('animated-forgot');
            Wrapper.classList.remove('animated-student');
            Wrapper.classList.remove('animated-signn');
        });

        signnLink.addEventListener('click',()=> {
            Wrapper.classList.add('animated-signn');
            Wrapper.classList.remove('animated-signup');
            Wrapper.classList.remove('animated-signin');
            Wrapper.classList.remove('animated-sign');
            Wrapper.classList.remove('animated-forgot');
            Wrapper.classList.remove('animated-student');
            Wrapper.classList.remove('animated-teacher');
        });
    </script>
    <script>
        function showSectionOrBranch() {
            var year = document.getElementById("year").value;
            var sectionOrBranch = document.getElementById("sectionOrBranch");
            var hostelBlock = document.getElementById("hostelBlock");
            var floor = document.getElementById("floor");
            var roomNo = document.getElementById("roomNo");
            var mess = document.getElementById("Mess");

            sectionOrBranch.innerHTML = "";
            hostelBlock.innerHTML = "";
            floor.innerHTML = "";
            roomNo.innerHTML = "";
            mess.innerHTML = "";


            if (year === "p1" || year === "p2") {
                sectionOrBranch.innerHTML = `
                    <label for="section">Section:</label>
                    <select id="section" name="section">
                        <option value="">select section</option>
                        <option value="section1">Section 1</option>
                        <option value="section2">Section 2</option>
                        <option value="section3">Section 3</option>
                        <option value="section4">Section 4</option>
                    </select>`;
            } else if (year === "E1" || year === "E2" || year === "E3" || year === "E4") {
                sectionOrBranch.innerHTML = `
                    <label for="branch">Branch:</label>
                    <select id="branch" name="branch">
                        <option value="">select Branch</option>
                        <option value="CSE">CSE</option>
                        <option value="ECE">ECE</option>
                        <option value="CIVIL">CIVIL</option>
                        <option value="MECH">MECH</option>
                        <option value="EEE">EEE</option>
                    </select>
                    <label for="branchSection">Section:</label>
                    <select id="branchSection" name="branchSection">
                        <option value="">select section</option>
                        <option value="section1">Section 1</option>
                        <option value="section2">Section 2</option>
                        <option value="section3">Section 3</option>
                        <option value="section4">Section 4</option>
                    </select>`;
            }

            hostelBlock.innerHTML = `
                <label for="block">Hostel Block:</label>
                <select id="block" name="block">
                    <option value="">select Block</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>`;

            floor.innerHTML = `
                <label for="floor">Floor:</label>
                <select id="floor" name="floor">
                    <option value="">select Floor</option>
                    <option value="GROUND FLOOR">GROUND FLOOR</option>
                    <option value="FIRST FLOOR">FIRST FLOOR</option>
                    <option value="SECOND FLOOR">SECOND FLOOR</option>
                    <option value="THIRD FLOOR">THIRD FLOOR</option>
                </select>`;

            roomNo.innerHTML = `
                <label for="roomNo">Room No:</label>
                <select id="roomNo" name="roomno">
                    <option value="">select rommNo</option>
                    <option value="001">001</option>
                    <option value="002">002</option>
                    <option value="003">003</option>
                    <option value="004">004</option>
                </select>`;

                mess.innerHTML = `
                <label for="roomNo">Mess:</label>
                <select id="roomNo" name="mess">
                    <option value="">select mess</option>
                    <option value="girls">Girls</option>
                    <option value="boys">Boys</option>
                </select>`;
        }
    </script>
    <script>
        function showdetails(){
            document.getElementById('stu-regi1').style.display="none";

            document.getElementById('stu-regi').style.display="block";
        }
    </script>
</html>