<?php

if(isset($_POST["submit"]))
{
    //get data
    $uname = $_POST["uname"];
    $password = $_POST["password"];

    //(create) login.contr
    include "../test/db.php";
    include "../test/login.classes.php";
    include "../test/login.contr.php";
    

    //running error handlers and user login

    $login = new loginContr($uname, $password);
    $result = $login->loginUser();

    //if not empty creat new login and check
    if($result == true){
    $login2 = new login();
    $result2 = $login2->getuser($uname, $password);
    }
    //if data correct
    if($result2 == true){
    header("location: Doctors.html");    
    }else{
        header("location:login.php?error=Email or Password is incorrect");
    }
    

}