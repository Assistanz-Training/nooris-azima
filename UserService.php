
<?php
include_once("UserModal.php");

class UserService {
	
	public $userModal;
	
	function __construct() {
		$this->userModal = new UserModal();
	}
	
	function addUser($postValues) {
		if(isset($postValues["firstname"])) {
			if($postValues["firstname"] == "") {
				throw new Exception("Firstname is Required");
			}
		}
		if(isset($postValues["lastname"])) {
			if($postValues["lastname"] == "") {
				throw new Exception("lastname is Required");
			}
		}
		if(isset($postValues["email"])) {
			if($postValues["email"] == "") {
				throw new Exception("email is Required");
			}
		}
		if(isset($postValues["phone"])) {
			if($postValues["phone"] == "") {
				throw new Exception("phone no  is Required");
			}
		}
		
		if(isset($postValues["username"])) {
			if($postValues["username"] == "") {
				throw new Exception("username is Required");
			}
		}
		if(isset($postValues["password"])) {
			if($postValues["password"] == "") {
				throw new Exception("password is Required");
			}
		}
		
		if(isset($postValues["source"])) {
			if($postValues["source"] == "") {
				throw new Exception("source is Required");
			}
		}
		if(isset($postValues["destination"])) {
			if($postValues["destination"] == "") {
				throw new Exception("destination is Required");
			}
		}
		if(isset($postValues["dateofpickup"])) {
			if($postValues["dateofpickup"] == "") {
				throw new Exception("dateofpickup is Required");
			}
		}
		if(isset($postValues["Timeofpickup"])) {
			if($postValues["Timeofpickup"] == "") {
				throw new Exception("Timeofpickup is Required");
			}
		}
		if(isset($postValues["cab"])) {
			if($postValues["cab"] == "") {
				throw new Exception("cab is Required");
			}
		}
		if(isset($postValues["cardnumber"])) {
			if($postValues["cardnumber"] == "") {
				throw new Exception("cardnumber is Required");
			}
		}
		
		

		
		
		
		$this->userModal->addUser($postValues);
	}
}

?>