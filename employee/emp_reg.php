<!DOCTYPE html>
<html>
<head>
<title>Employee Registeration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="style.css" rel="stylesheet" type="text/css" media="all" />

<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>


<body style="background-image:url(banner.jpg)">
		
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Sign Up</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="post" onsubmit="return Validate() && ValidateEmail() && Validphone() && Validatepassword() && Confirmpass()  && ValidateAddress()">
        
					<input class="text" type="text" name="name" id="name" placeholder="Name" autocomplete="nope"  title="Name must be alphabets" required onkeyup="return Validate()" onblur="return Validate()" required/>
          <span id="fn" style="color: red;"></span>
          <br>
<select  style="width:200px;height:30px;" name="gender">
	<option value="none" selected>Gender</option>
	<option value="male">Male</option>
	<option value="female">Female</option>
	<option value="female">Others</option>
</select>
					<input class="text email" type="email" name="email" id="email" placeholder="Email" autocomplete="nope" required onkeyup="return ValidateEmail()" onblur="return ValidateEmail()">
          <span id="el" style="color: red;"></span>
					<input type="text" name="address" placeholder="Address" id="address" autocomplete="nope" required onkeyup="return ValidateAddress()" onblur="return ValidateAddress()"><br>
          <span id="ad" style="color: red;"></span>
					<input class="text phone" type="text" name="phone" id="phone" placeholder="Phone" autocomplete="nope" title="Please enter a valid phone number" required onkeyup="return Validphone()" onblur="return ValidePhone()">
            <span id="msg2" style="color: red;"></span><br>
          <div class="input-field">
					<input class="text" type="password" name="password" id="password" placeholder="Password" required onkeyup="return  Validatepassword()" onblur="return Validatepassword()">
          <span toggle="#pswd" id="password-error" class="zmdi zmdi-eye field-icon toggle-password"></span>
          <span id="passwordError" style="color: red;"></span>
          <style>
                                                 /* The message box is shown when the user clicks on the password field */
                                                    #message {
                                                    display:none;
                                                    background:#fff;
                                                    color: #000;
                                                    position: relative;
                                                    padding: 20px;
                                                    margin-top: 10px;
                                                    }
                                                                        #message p {
                                                    padding: 1px 35px;
                                                    font-size: 14px;
                                                    }
                                                    /* Add a green text color and a checkmark when the requirements are right */
                                                    .valid {
                                                    color: green;
                                                    }

                                                    .valid:before {
                                                    position: relative;
                                                    left: -25px;
                                                    content: "???";
                                                    }

                                                    /* Add a red text color and an "x" when the requirements are wrong */
                                                    .invalid {
                                                    color: red;
                                                    }

                                                    .invalid:before {
                                                    position: relative;
                                                    left: -25px;
                                                    content: "???";
                                                    }
                                                    </style>
                                                    <div id="message">
<!--                                                    <h4 style="color:rgb(249, 164, 61) ;">Password must contain the following:</h4>-->
                                                        <p id="letter" class="invalid">A lowercase letter</p>
                                                        <p id="capital" class="invalid">A capital (uppercase) letter</p>
                                                        <p id="number" class="invalid">A number</p>
                                                        <p id="length" class="invalid">Minimum 8 characters</b></p>
                                                     </div>
                                                <script>
                                                  
                                        var myInput = document.getElementById("passwordError");
                                        var letter = document.getElementById("letter");
                                        var capital = document.getElementById("capital");
                                        var number = document.getElementById("number");
                                        var length = document.getElementById("length");
                                        myInput.onfocus = function() {
                                        document.getElementById("message").style.display = "block";
                                        }
                                        myInput.onblur = function() {
                                        document.getElementById("message").style.display = "none";
                                        }
                                        // When the user starts to type something inside the password field
                                        myInput.onkeyup = function() {
                                        // Validate lowercase letters
                                        var lowerCaseLetters = /[a-z]/g;
                                        if(myInput.value.match(lowerCaseLetters)) {
                                            letter.classList.remove("invalid");
                                            letter.classList.add("valid");
                                        } else {
                                            letter.classList.remove("valid");
                                            letter.classList.add("invalid");
                                        }

                                        // Validate capital letters
                                        var upperCaseLetters = /[A-Z]/g;
                                        if(myInput.value.match(upperCaseLetters)) {
                                            capital.classList.remove("invalid");
                                            capital.classList.add("valid");
                                        } else {
                                            capital.classList.remove("valid");
                                            capital.classList.add("invalid");
                                        }

                                        // Validate numbers
                                        var numbers = /[0-9]/g;
                                        if(myInput.value.match(numbers)) {
                                            number.classList.remove("invalid");
                                            number.classList.add("valid");
                                        } else {
                                            number.classList.remove("valid");
                                            number.classList.add("invalid");
                                        }

                                        // Validate length
                                        if(myInput.value.length >= 8) {
                                            length.classList.remove("invalid");
                                            length.classList.add("valid");
                                        } else {
                                            length.classList.remove("valid");
                                            length.classList.add("invalid");
                                        }
                                        }
                                    </script>
                                      </div>
					<input class="text w3lpass" type="password" name="cnfm_pswd" id="cnfm_pswd" placeholder="Confirm Password" required onkeyup="return Confirmpass()" onblur="return Confirmpass()">
          <span id="cpss" style="color: red;"></span>
					<!-- <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div> -->
					<input type="submit" name="submit" value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="../login/login.php"> Login Now!</a></p>
			</div>
		</div>
    <script type="text/javascript">
function Validate() 
                            {
                            var val = document.getElementById('name').value;
                            if (!val.match(/^[A-Z].*$/)) 
                            {
                              document.getElementById('fn').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                                    document.getElementById('name').value = val;
                                    document.getElementById('name').style.color = "red";
                                      return false;
                                     flag=1;
                            }
                            if(val.length<3||val.length>30){
                              document.getElementById('fn').innerHTML="Between 3 to 10 characters";
                                    document.getElementById('name').value = val;
    
    
                                document.getElementById('name').style.color = "red";
                                      return false;
                                      
                            }
                            else{
    
                            
                             document.getElementById('fn').innerHTML=" ";
                              document.getElementById('name').style.color = "green";
                             return true;
                            }
                          }
                          function ValidateEmail()
                            {
                         
                              var email=document.getElementById('email').value;  
                              var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                            //var atposition=x.indexOf("@");  
                            //var dotposition=x.lastIndexOf(".");  
                           
                              if(email.length<3||email.length>30){
                                document.getElementById('el').innerHTML="Invalid Email";
                                    document.getElementById('email').value = email;
                                    document.getElementById('email').style.color = "red";
                                   // alert("err");
                                      return false;
                              }
                             if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){  
                                document.getElementById('el').innerHTML="Please enter a valid Email";  
                                document.getElementById('email').value = email;
                                    document.getElementById('email').style.color = "red";
                              return false;  
                              }
                              else{
                              document.getElementById('el').innerHTML=" ";
                              document.getElementById('email').style.color = "green";
                             return true;
    
                              
                            }
                          }
                             function Validatepassword()
                             {
                          
                              var pass=document.getElementById('password').value;
                              var patt="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/";
                              if (pass.length<8)
                               if(!pass.match(/[a-z]/g)){
                                document.getElementById('password').value = pass;
                                 document.getElementById('passwordError').innerHTML="Enter a strong password eg:Aa#23gh56";
                                  document.getElementById('password').style.color="red";
                                  return false;
                                }
                                if(!pass.match(/[A-Z]/g)){
                                  document.getElementById('password').value = pass;
                                   document.getElementById('passwordError').innerHTML="Include minimum one capital letter";
                                 document.getElementById('password').style.color="red";

                                     return false;
                                }
                                if(!pass.match(/[0-9]/g)){
                                  document.getElementById('password').value = pass;
                                  document.getElementById('passwordError').innerHTML="Include 1 digit";
                                document.getElementById('password').style.color="red";

                                return false;
                                 }
                              if(!pass.match(/[^a-zA-Z\d]/g)){
                                document.getElementById('password').value = pass;
                                document.getElementById('passwordError').innerHTML="Include 1 special character";
                              document.getElementById('password').style.color="red";

                              return false;
                                 }
                            if(pass.length < 8){
                              document.getElementById('password').value = pass;
                               document.getElementById('passwordError').innerHTML="Minimum 8 characters";
                              document.getElementById('password').style.color="red";

                              return false;
                            }
                              else{
                                document.getElementById('password').value = pass;

                                 document.getElementById('passwordError').innerHTML="";
                                document.getElementById('password').style.color = "green";
                              }
                           
                               
                          }
                          function Confirmpass()
                             {
                          
                              var pass1=document.getElementById('password').value;
                              var pass2=document.getElementById('cnfm_pswd').value;
                               if (pass1!=pass2)
                                        {
                                 document.getElementById('cpss').innerHTML="Password doesn't match ";  
                                document.getElementById('cnfm_pswd').value = pass2;
                                document.getElementById('cnfm_pswd').style.color = "red";
                              return false;  
                              }
                           
                              else{
                              document.getElementById('cpss').innerHTML=" ";
                              document.getElementById('cnfm_pswd').style.color = "green";
                            return true;
                              
                            }
                          }
                          function Validphone() 
                        {
                        var val = document.getElementById('phone').value;
                          if (!val.match(/^[6789][0-9]{9}$/))
                           {
                            document.getElementById('msg2').innerHTML="Only Numbers started with 6,7,8,9 are allowed and must contain 10 number";
                                  document.getElementById('phone').value = val;
                                    return false;
                           }else{
                            document.getElementById('msg2').innerHTML="";
                        //   return true;
                        }
                    }
                       
                          
function ValidateAddress(){
  var address = document.getElementById('address').value;
                            if (!address.match(/^[a-zA-Z ]*$/)) 
                            {
                              document.getElementById('ad').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                                    document.getElementById('address').value = address;
                                    document.getElementById('address').style.color = "red";
                                      return false;
                                     flag=1;
                            }
                            if(address.length<3||address.length>30){
                               document.getElementById('ad').innerHTML="Between 3 to 10 characters";
                                    document.getElementById('address').value = address;
    
    
                                document.getElementById('address').style.color = "red";
                                      return false;
                                      
                            }
                            else{
    
                            
                              document.getElementById('ad').innerHTML=" ";
                              document.getElementById('address').style.color = "green";
                             return true;
                            }
                          }

function Val()
                            {
                              if(Validate()===false || ValidateEmail()===false || Validatepassword()===false || Confirmpass()===false || Validphone()===false)
                              {
                                return false;
                              }
                            }
             </script>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<!-- <p>?? 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p> -->
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>
<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
$emailerror=false;
 
if($_SERVER["REQUEST_METHOD"] == "POST") {

    include '../config.php';

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$gender=$_POST['gender'];
$address = $_POST['address'];
$phone = $_POST['phone'];  
$email = $_POST['email'];
$password = $_POST['password'];
$cnfm_pswd = $_POST['cnfm_pswd'];
$type=3;

if($password != $cnfm_pswd){
  echo"<script>alert('Passwords doesn't match');window.location='emp_reg.php'</script>";
}
$check_email = mysqli_query($conn, "SELECT email FROM `tbl_employee` where email = '$email' ");
if(mysqli_num_rows($check_email) > 0){
  echo"<script>alert('Email Already exists');window.location='emp_reg.php'</script>";
}
else{
 $a = "INSERT INTO tbl_employee (`name`,`gender`,`address`,`phone`,`email`,`password`,`cnfm_password`) VALUES ('$name','$gender','$address','$phone','$email','$password','$cnfm_pswd')";
 $sql=mysqli_query($conn,$a);
$id = mysqli_insert_id($conn);
 $sql1 = "INSERT INTO tbl_login (`email`,`password`,`type`) VALUES ('$email','$password','$type')";

 $qry = mysqli_query($conn,$sql1);

 if($qry==TRUE)
{
	echo "<script>alert('User registered Successfully!!');window.location='../login/login.php'</script>";
}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
}
}
?>
