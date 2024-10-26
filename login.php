<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="file1.css">
</head>

<body>
    <div class="container">
        <marquee behavior="alternate" direction="left">
            <div class="sec">
                <img src="images\grocery store logo.png" alt="Natural" id="first" />
                <h1>Welcome to our shop </h1>
                <img src="images\grocery store logo.png" alt="Natural" id="first" />
            </div>
        </marquee><br><br><br><br>
    </div>
    <div>
        <center>
            <form  name="myForm" id="form" onsubmit="return validateForm(event)" method="post">
            <h1 aling="center">LOGIN</h1>
            <div class="formdesign" id="name">
                <label for="name_n">Name:</label>
                <input type="text" name="f_name" required placeholder="Enter your name">
                <b><span class="formerror"></span></b>
            </div>
            <div class="formdesign" id="pass">
                <label for="pass_p">Password:</label>
                <input type="password" name="f_pass" required placeholder="Enter password">
                <b><span class="formerror"></span></b>
            </div>
            <input class="but" id="but" type="submit" value="LOGIN" onclick="redirect1()" name="submit">
            </form> 
        </center>
    </div>
</body>
<script src="index.js" ></script>
</html>

<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $uname=$_POST['f_name'];
        $password=$_POST['f_pass'];

        $sql = "SELECT * FROM `details` WHERE name='$uname' and pass='$password'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        if($count == 1){  
            header("Location: mainpag.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "login.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>