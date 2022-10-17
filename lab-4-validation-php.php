<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    
       <form action="" method="post">
         Name: <input type = "text" name = "Name" /><br>
         <br>
         Email: <input type = "text" name = "Email" /><br>
         Username: <input type = "text" name = "Username" /><br>
         Password: <input type = "password" name = "Password" /><br>
         Confirm Password: <input type = "password" name = "Password" /><br>
         <input type = "radio" name = "Gender" > Male
         <input type = "radio" name = "Gender" value = "physics"> Female <br>
         <label for="birthday">Date of Birth:</label>
        <input type="date"  name="Dob"><br>
        <button>submit</button>   <button>Reset</button>











      </form>


<?php

if(empty($_POST["Name"]))
{
    die("Name is required");
}
if ( ! preg_match("/^([a-zA-Z' ]+)$/", $_POST["Name"])) {
    die("Letter reqired");
}

if ( ! filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}
if(!preg_match("/^[a-z0-9_\-]+$/i" ,$_POST["Username"]))
{
   die(" alpha numeric characters, period, dash or underscore must be contained");

}
if(strlen(s_POST["Password"])<8)
{

    die("must not be less than eight (8) characters
    ");
}
if ( !preg_match("#[0-9]+#", $_POST["Password"]) ) {
        die("password at least one number");
}

if ( !preg_match("#[a-z]+#", $_POST["Password"]) ) {
       die("required at least one small letter");
}

if ( !preg_match("#[A-Z]+#", $_POST["Password"]) ) {
       die("required at least one big letter");
}

if ( !preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $_POST["Password"]) ) {
       die("password requied at least one special characters");
}

if ($_POST["Password"] !== $_POST["confirm password"]) {
    die("Passwords must match");
}

if (isset($_POST['Gender'])) {

    echo 'Gender is required';
}
?>
</body>
</html>