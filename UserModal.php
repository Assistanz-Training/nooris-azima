<?php

class UserModal {
	
		function addUser($postValue) {
			$servername = "localhost";
	        $username = "root";
	        $password = "";
	        $dbname = "oli";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//echo "created";
// Check connection
if ($conn->connect_error) {
	throw new Exception($conn->connect_error);
}
 
//$sql_1 = "SELECT username from user_1 WHERE username=$username";
//if (mysql_num_rows($sql_1) != 0)
//{
  //  echo "Username already exists";
//}
//else{
	
$firstname=$_POST['firstname'];	
$sql = "INSERT INTO  user(firstname,lastname,email,phone,username,password,source,destination,dateofpickup,Timeofpickup,cab,cardnumber)VALUES ('".$postValue['firstname']."','".$postValue['lastname']."','".$postValue['email']."','".$postValue['phone']."','".$postValue['username']."','".$postValue['password']."','".$postValue['source']."','".$postValue['destination']."','".$postValue['Timeofpickup']."','".$postValue['dateofpickup']."','".$postValue['cab']."','".$postValue['cardnumber']."')";



if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
	throw new Exception($conn->error);
}


$conn->close();


	}
	
}
?>



