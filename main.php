<?php
include_once "UserService.php";

class UserController {
	
	public $userService;
	
	function __construct() {
		$this->userService = new UserService();
	}
	
	function addUser() {
		try {
		$this->userService->addUser($_POST);
		
		
		$firstname = (isset($_POST["firstname"]) ? $_POST["firstname"] : "");
		echo json_encode($firstname);
		$lastname = (isset($_POST["lastname"]) ? $_POST["lastname"] : "");
		echo json_encode($lastname);
		$email = (isset($_POST["email"]) ? $_POST["email"] : "");
		echo json_encode($email);
		$phone = (isset($_POST["phone"]) ? $_POST["phone"] : "");
		echo json_encode($phone);
		
		$username = (isset($_POST["username"]) ? $_POST["username"] : "");
		echo json_encode($username);
		$password = (isset($_POST["password"]) ? $_POST["password"] : "");
		echo json_encode($password);
		
		$source = (isset($_POST["source"]) ? $_POST["source"] : "");
		echo json_encode($source);
		$destination = (isset($_POST["destination"]) ? $_POST["destination"] : "");
		echo json_encode($destination);
		
		//pickup detail
		$dateofpickup = (isset($_POST["dateofpickup"]) ? $_POST["dateofpickup"] : "");
		echo json_encode($dateofpickup);
		$Timeofpickup = (isset($_POST["Timeofpickup"]) ? $_POST["Timeofpickup"] : "");
		echo json_encode($Timeofpickup);
		
		//select cab
		$cab = (isset($_POST["cab"]) ? $_POST["cab"] : "");
		echo json_encode($cab);
		
		//booking detail
		$cardnumber = (isset($_POST["cardnumber"]) ? $_POST["cardnumber"] : "");
		echo json_encode($Timeofpickup);
		
		
		//registration is sucess.....
		//Thank you
		echo "registration sucess";
		echo "thank you";
		
		
		 
		
		
		
		} catch(Exception $e) {
			echo json_encode(array("status" => false, "message" => $e->getMessage()));
		}
	}
	
}

$user = new UserController();
$user->addUser();

?>