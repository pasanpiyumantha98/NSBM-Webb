<?php 


    $fname=$_REQUEST['fn'];
    $lname=$_REQUEST['ln'];
    $uname=$_REQUEST['un'];
    $password=$_REQUEST['p'];
    $gender=$_REQUEST['gender'];
    $year=$_REQUEST['y'];
    $email=$_REQUEST['email'];
    $number=$_REQUEST['num'];
    

     echo "<tr>";
        echo "<td>First Name - </td>";
        echo "<td>$fname</td><br>";
     echo "</tr>"; 
	 echo "<tr>";
        echo "<td>Last Name - </td>";
        echo "<td>$lname</td><br>";
     echo "</tr>"; 
	 echo "<tr>";
        echo "<td>Username - </td>";
        echo "<td>$uname</td><br>";
     echo "</tr>"; 
	 echo "<tr>";
        echo "<td>Password - </td>";
        echo "<td>$password</td><br>";
     echo "</tr>"; 
	 echo "<tr>";
        echo "<td>Gender - </td>";
        echo "<td>$gender</td><br>";
     echo "</tr>"; 
	  echo "<tr>";
        echo "<td>Academic Year - </td>";
        echo "<td>$year</td><br>";
     echo "</tr>"; 
	  echo "<tr>";
        echo "<td>Phone Number - </td>";
        echo "<td>$number</td><br>";
     echo "</tr>"; 
 
 
 
 
?> 