<?php 
   $servername = "localhost";
   $username = "root";
   $password = "";
   $conn = mysqli_connect($servername, $username, $password,'db1');
   $result=mysqli_query($conn,"select * from tenth");
   if(!$result) echo 'error'; ;
   $t="<table border='1px' style='border-collapse:collapse;'><tr><th> Name</th><th>Email</th><th>Password</th><th>Confirm Password</th><th>Exam</th><th>Mobile Number</th><th>Gender</th><th>Birthdate</th><th>Address</th></tr>";
   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $t.="<tr><td>$row[name]</td><td>$row[email]</td><td>$row[pass]</td><td>$row[repass]</td><td>$row[exam]</td><td>$row[phno]</td><td>$row[gender]</td><td>$row[birthdate]<td>$row[address]</td></td></tr>";
    }
    }
    $t.="</table>";
    echo $t;
?>

<a href="home.html" style="position: absolute; top: 100px; left: 550px;"><button style="background-color: greenyellow; color: black;padding: 10px 20px;border: none;border-radius: 5px;cursor: pointer;font-size: 16px;text-decoration: none;transition: background-color 0.3s ease;">HOME</button></a>