<?php
  $servername = "localhost"; //XAMPP
  $username = "root"; //DEFAULT LOGIN FOR XAMPP
  $password = ""; //DEFAULT PASSWORD FOR XAMPP
  $database = "cspdatabase"; //CHANGE THIS
  $table1 = "messages"; //CHANGE THIS


  //SERVER CONNECTION
  function connServer(){
    global $servername, $username, $password;

    $connect = mysqli_connect($servername,$username, $password);

    if (!$connect) {
      die("Unable to connect to server");
    }
    return $connect;
  }
  
  //DATABASE CREATION
  function createDB(){
    global $servername, $username, $password, $database;
    $connect = mysqli_connect($servername, $username, $password);
    $sqlDatabase = "CREATE DATABASE IF NOT EXISTS $database";
    //The mysqli_query() functions sends the sqli command stored in the $sqliDatabase variable through the connection link. $sqliDatabase may not be the best variable name so consider changing it if you use this code. 
    if(mysqli_query($connect, $sqlDatabase)){ //THIS IS THE LINE THAT CREATES THE DATABASE
          }else{
      die("Unable to create database " . $database . mysqli_error($connection));    }
  }

  //DATABASE CONNECTION
  function connDB(){
    global $servername, $username, $password, $database;
    $connect = mysqli_connect($servername, $username, $password, $database);
    if (!$connect) {
      die("Unable to connect to Database");
    }
    return $connect;
  }

  //USERS TABLE CREATOR
  function createtable1(){
        //create a new table within this database. THIS TABLE HAS TO PIECES OF INFO, BOTH STRINGS OF ANY LENGTH (MAX 64 characters)
        global $servername, $username, $password, $database, $table1;
        $connect = mysqli_connect($servername, $username, $password, $database);
        $sqlTable = "CREATE TABLE IF NOT EXISTS $table1(
          name1 VARCHAR(64) NOT NULL,
          msg VARCHAR(64) NOT NULL
          )";
  
          if (mysqli_query($connect, $sqlTable)){ //THIS IS THE LINE THAT MAKES THE TABLE
            }else{
              die("Error creating table: " . mysqli_error($connect));
          }
  }
?>
