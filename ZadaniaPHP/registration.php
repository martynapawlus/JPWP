<?php
$servername="localhost";
$mysql_user="root";
$mysql_pass="";
$dbname="JPWP";
$conn=mysqli_connect($servername, $mysql_user, $mysql_pass, $dbname);

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $email=$_POST["email"];
    $password1=$_POST["password1"];
    $password2=$_POST["password2"];
    //TODO
    $name_regexp="??????";
    $name_check = preg_match($name_regexp, $name);
    //TODO
    $surname_regexp="??????";
    $surname_check = preg_match($surname_regexp, $surname);
    //TODO
    $email_regexp="??????";
    $email_check = preg_match($email_regexp, $email);
    
    //TODO odpowiednio sprawdź czy hasła się zgadzają
    if(($name_check == true) && ($surname_check == true) && ($email_check == true)){
        $query="INSERT INTO `registration`(`name`, `surname`, `email`, `password`) VALUES ('$name', '$surname', '$email', '$password1')";
        
        if(mysqli_query($conn, $query)){
            echo("registered successfully");
        }else{
            echo("Error in registration");
        }
        
    } else {
        echo("Illegal expressions have been used");
    }

}else{
echo("Error in request method");
}
?>
