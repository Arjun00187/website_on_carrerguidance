<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "create table tw(name varchar(30),email varchar(40) primary key,pass varchar(50),repass varchar(50),exam varchar(20),phno varchar(13),gender varchar(6),birthdate varchar(20),address varchar(200))";
if ($conn->query($sql) === TRUE) {
  echo "Table twelve created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>