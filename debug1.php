<?php
$text = $_POST["text"];


$host = "localhost";
$dbname = "confess_db";
$username = "root";
$password = "";

 $conn = mysqli_connect( $host, $username, $password, $dbname);
    
             

if(mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO confess (`text`)
        VALUES (?)"; 

  $stmt = mysqli_stmt_init($conn);

   if ( ! mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
   }

   mysqli_stmt_bind_param($stmt, "s",
                            $text,
                           );

    if(mysqli_stmt_execute($stmt)) {

        header("Location: http://localhost:3000/cc++/dropbox.html");
        exit();
    } else {
        die(mysqli_error($conn));
    }

?>