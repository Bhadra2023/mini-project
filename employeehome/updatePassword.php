
<?php
include 'config.php';
session_start();
// if(!empty($_SESSION['email']))
// {
//     echo $_SESSION['email'];
// }
$pass_value = $_SESSION['email'];
// echo $pass_value;
if(isset($_POST['submit_reset'])){
    $password = $_POST['password'];
    $cnfm_pswd = $_POST['cnfm_pswd'];
    if($password != $cnfm_pswd){
        echo '<script> alert ("Password doesnot match");</script>';
	    echo'<script>window.location.href="updatePass.php";</script>';
    }
    else{
        $insert = "UPDATE `tbl_login` SET `password`='$cnfm_pswd' WHERE `email`='$pass_value'";
        mysqli_query($conn,$insert);
        echo '<script> alert ("Password updated successfully");</script>';
	    echo'<script>window.location.href="../login/login.php";</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
    <title>Password</title>
    <style>
        body{
            background-image: url(images/banner.jpg);
        }
     .navbar {
        overflow: hidden;
        background-color: #333;
        position: absolute;
        width: 100%;
        left: 0px;
        top: 0px;
        }


        .navbar a {
        float: right;
        color: white;
        padding-top: 30px;
        margin-right: 50px;
        text-decoration: none;
        font-family: 'Itim';
        }
        .navbar a.left {
            float: left;
            padding: 0%;
            padding-left: 25px;
        }
        .navbar a:hover {
        color: rgb(185, 185, 185);
        }
        .ticket{
            position: absolute;
            width: 561px;
            height: 497px;
            left: 807px;
            top: 163px;
        }
        table{
            position: absolute;
            left: 550px;
            top: 200px;
        }
        table label{
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 23px;
            line-height: 48px;
        }
        input:not([type=submit]){
            box-sizing: border-box;
            background: #D9D9D9;
            border: 2px solid #757070;
            border-radius: 9px;
            padding: 10px;
            width: 300px;
            height: 45px;
        }
        input[type="submit"] {
            position: absolute;
            background: #1E1E1E;
            top: 230px;
            height: 40px;
            width: 90px;
            border-radius: 20px;
            color: white;
            border: none;
            font-family: 'Poppins';
            
        }
        input[type="submit"]:hover{
            background-color: #000000;
            cursor: pointer;
        }
        ::placeholder{
            font-family: 'Poppins';
            padding-left: 8px;
            font-weight: 700;
        }
        </style>
        <script>
            function validateForm() {
    var pw1 = document.getElementById("password").value;
    var pw2 = document.getElementById("cnfm_pswd").value;
    if(pw2!="" && pw1 != pw2) {
        document.getElementById('msg1').style.display = "block";
        document.getElementById('msg1').innerHTML = "Password doesnot match";
        return false;
    }
    else{
        document.getElementById('msg1').style.display = "none";
    }
}
        </script>
</head>
<body>
    <div class="navbar">
        <!-- <a class="left" href="index.php"><img src="imgs/main-logo.png" alt="BookMyTickets" width="200" height="80"></a> -->
    </div>
    <form action="" method="POST" onsubmit ="return validateForm()">
    <table>
        <tr><td><label for="pswd">New password</label></td></tr>
        <tr><td><input type="password" name="password" id="password" onblur="return validateForm()" onKeyUp="return validateForm()" placeholder="Enter your new password here" required></td></tr>
        <tr><td><label for="cnfm_pswd">Confirm password</label></td></tr>
        <tr><td><input type="password" name="cnfm_pswd" id="cnfm_pswd" onblur="return validateForm()" onKeyUp="return validateForm()" placeholder="Enter your password again here" required></td></tr>
        <tr><td><span id="msg1" style="color: red;"></span></td></tr>
        <tr><td><input type="submit" name="submit_reset" value="Reset"></td></tr>
    </table>
    </form>
</body>
</html>
