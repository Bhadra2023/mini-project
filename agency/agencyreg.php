<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
$emailerror=false;
 
if($_SERVER["REQUEST_METHOD"] == "POST") {

    include '../config.php';

if(isset($_POST['submit']))
{
$agencyname= $_POST['name'];
$district = $_POST['district'];  
$phone=$_POST['phone'];
$email = $_POST['email'];
$pswd = $_POST['password'];
$type=4;
// exit;
$check_email = mysqli_query($conn, "SELECT email FROM `tbl_courier` where email = '$email' ");
if(mysqli_num_rows($check_email) > 0){
  echo"<script>alert('Email Already exists');
  window.location='agencyreg.php'</script>";
}
else{
 $a = "INSERT INTO tbl_courier (`agencyname`,`district`,`phone`,`email`,`password`) VALUES ('$agencyname','$district','$phone','$email','$pswd')";
 $sql=mysqli_query($conn,$a);
// $id = mysqli_insert_id($conn);
 $sql1 = "INSERT INTO `tbl_login` (`email`,`password`,`type`) VALUES ('$email','$pswd','$type')";

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jewel</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image:url(banner2.png)">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/sell-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="AgencyName" required onkeyup="validateName()" autocomplete="off"/>
                            <span id="name-error"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="district" id="district" placeholder="district" required onkeyup="validatedistrict()" autocomplete="off"/>
                            <span id="district-error"></span>
                        </div>
                       
                        <div class="form-group">
                            <input type="phone" class="form-input" name="phone" id="phone" placeholder="phone number" onkeyup="return ValidatePhone();" autocomplete="off"/>
                        <span id="phone-error"></span>
                    </div>
                        
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" required onkeyup="validateEmail()" autocomplete="off"/>
                            <span id="email-error"></span>
                        </div>
                        
                    
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required onkeyup="validatePassword()" autocomplete="off"/>
                            <span toggle="#password" id="password-error" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            <span id="password-error"></span>
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
                                   content: "✔";
                                   }

                                   /* Add a red text color and an "x" when the requirements are wrong */
                                   .invalid {
                                   color: red;
                                   }

                                   .invalid:before {
                                   position: relative;
                                   left: -25px;
                                   content: "✖";
                                   }
                                   </style>
                               <div id="message">
<!--                                                    <h4 style="color:rgb(249, 164, 61) ;">Password must contain the following:</h4>-->
                                       <p id="letter" class="invalid">A lowercase letter</p>
                                       <p id="capital" class="invalid">A capital (uppercase) letter</p>
                                       <p id="number" class="invalid">A number</p>
                                       <p id="special" class="invalid">A Special case letter</p> 
                                       <p id="length" class="invalid">Minimum 8 characters</b></p>
                                    </div>
                               <script>
                       var myInput = document.getElementById("password");
                       var letter = document.getElementById("letter");
                       var capital = document.getElementById("capital");
                       var number = document.getElementById("number");
                       var special = document.getElementById("special");
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
                       // Validate special case
                       var specialChars =/[^a-zA-Z\d]/g;
                       if(myInput.value.match(specialChars)) {
                        special.classList.remove("invalid");
                        special.classList.add("valid");
                       } else {
                        special.classList.remove("valid");
                        special.classList.add("invalid");
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
                        
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="../login/login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
 <!-- JS -->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="js/main.js"></script>
 <script defer src="script.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<script>
var nameError = document.getElementById('name-error');
var districtError = document.getElementById('district-error');
var phoneError = document.getElementById('phone-error');
var emailError = document.getElementById('email-error');
var passwordError = document.getElementById('password-error');

function validateName(){
    var name = document.getElementById('agencyname').value;
    if(!name.match(/^[a-zA-Z]*$/)){
        nameError.innerHTML = 'Write correct name';
        return false;
    }
    nameError.innerHTML=" ";
    return true;
}

function validatedistrict(){
    var name = document.getElementById('district').value;
    if(!name.match(/^[a-zA-Z]*$/)){
        districtError.innerHTML = 'Write correct district';
        return false;
    }
    districtError.innerHTML=" ";
    return true;
}
// function validateAddress(){
//     var address = document.getElementById('seller_addr').value;
//     var address = address.substring(0,1);
   
//     if(!address.match(/^[a-zA-Z0-9\s\,\''\-]*$/)){
//        addressError.innerHTML = 'Enter valid address';
//         return false;
//     }
//     if(address.match(/^[0-9]/)){
//         addressError.innerHTML = 'Should not start with digit';
//         return false;
//     }
//     function hasBlankSpaces(str){
//         return  str.match(/^\s+$/) !== null;
//     }
//     if(hasBlankSpaces(address)){
//         addressError.innerHTML = 'The field has blank spaces';
//         return false;
//     }
//     addressError.innerHTML=" ";
//     return true;
// }

        function ValidatePhone() 
                        {
                        var val = document.getElementById('phone').value;
                          if (!val.match(/^[6789][0-9]{9}$/))
                           {
                            document.getElementById('phone-error').innerHTML="Only Numbers started with 6,7,8,9 are allowed and must contain 10 number";
                                  document.getElementById('phone').value = val;
                                    return false;
                           }else{
                            document.getElementById('phone-error').innerHTML="";
                        //   return true;
                        }
                    }
                          

//     function validatePincode(){
//     var pincode = document.getElementById('pincode').value;
//     if(!pincode.match( /^(\d{4}|\d{6})$/)){
//        pincodeError.innerHTML = 'Enter valid pincode';
//         return false;
//     }
//     pincodeError.innerHTML=" ";
//     return true;
// }

function validateEmail(){
    var email = document.getElementById('email').value;
    if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
       emailError.innerHTML = 'Enter valid email';
        return false;
    }
    emailError.innerHTML=" ";
    return true;
}


function validatePassword()
                             {
                          
                              var pass=document.getElementById('pswd').value;
                              var patt="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/";
                              if (pass.length<8)
                               if(!pass.match(/[a-z]/g)){
                                document.getElementById('pswd').value = pass;
                                 document.getElementById('cnfm_pswd').innerHTML="Enter a strong password eg:Aa#23gh56";
                                  document.getElementById('pswd').style.color="red";
                                  return false;
                                }
                                if(!pass.match(/[A-Z]/g)){
                                  document.getElementById('pswd').value = pass;
                                   document.getElementById('password-error').innerHTML="Include minimum one capital letter";
                                 document.getElementById('pswd').style.color="red";

                                     return false;
                                }
                                if(!pass.match(/[0-9]/g)){
                                  document.getElementById('pswd').value = pass;
                                  document.getElementById('password-error').innerHTML="Include 1 digit";
                                document.getElementById('pswd').style.color="red";

                                return false;
                                 }
                              if(!pass.match(/[^a-zA-Z\d]/g)){
                                document.getElementById('pswd').value = pass;
                                document.getElementById('password-error').innerHTML="Include 1 special character";
                              document.getElementById('pswd').style.color="red";

                              return false;
                                 }
                            if(pass.length < 8){
                              document.getElementById('pswd').value = pass;
                               document.getElementById('password-error').innerHTML="Minimum 8 characters";
                              document.getElementById('pswd').style.color="red";

                              return false;
                            }
                              else{
                                document.getElementById('pswd').value = pass;

                                 document.getElementById('password-error').innerHTML="";
                                document.getElementById('pswd').style.color = "green";
                              }
                           
                               
                          }
// function validateConfirmpwd()
//                              {
                          
//                                 var pass1=document.getElementById('pswd').value;
//                                 var pass2=document.getElementById('cnfm_pswd').value;
//                                 if (pass1 != pass2)
//                                 {
//                                 document.getElementById('cnfm_pswd').innerHTML="Password doesn't match ";  
//                                 document.getElementById('cnfm_pswd').value = pass2;
//                                 document.getElementById('cnfm_pswd').style.color = "red";
//                                 return false;  
//                                 }
                           
//                                 else{
//                                         document.getElementById('cnfm_pswd').innerHTML=" ";
//                                         document.getElementById('cnfm_pswd').style.color = "green";
//                                 return true;
                              
//                             }
//                           }
    function Valuemore()
     {
       if( validateName()==false ||  validatedistrict()==false ||   ValidatePhone()==false || ValidateEmail()==false ||  validatePassword()==false)
        {
          return false;
        }
      }
</script>
</html>