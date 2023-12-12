<?php
include 'phpFunctionsCapstone.php';
//connects to the database
$connect = mysqli_connect($servername, $username, $password, $database);

//check for data in the post and get arrays and then attempt to add that data to the database
if (isset($_POST['name']) && ($_POST['message'])){
    //Inserts the comment to the database through a prepared statement to help protect against sql injections
    $sql = "INSERT INTO messages (name1, msg) VALUES (?,?)";
    $stmt = mysqli_prepare($connect, $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "ss", $_POST['name'], $_POST['message']);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: Capstonedatabasing.php");
        die();
    }else{ //error message
        die("Error Creating User:");
    }
}
?>