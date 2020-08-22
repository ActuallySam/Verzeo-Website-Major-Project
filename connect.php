<?php

    $email = $_POST['email'];
    $password = $_POST['password'];
    $course = $_POST['course'];

    $conn = new mysqli('localhost','root','','internship');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration(email, password,course)
        values(?,?,?)");
        $stmt->bind_param("ssssii",$email,$password,$course);
        $stmt->execute();
        echo "Registration Successful...";
        $stmt->close();
        $conn->close();
    }

?>