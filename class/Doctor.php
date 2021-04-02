<?php 

class Doctor{
	public static function add($token, $firstName, $secondName, $email, $phone, $gender, $role){
		if($token == ""){
			$token = md5(time().uniqid().unixtojd().$role.$email.$phone);
			$password = "hospital"; 
			
			Db::insert(
				"users", 
				array("firstName", "secondName", "email", "password", "status", "phone", "gender", "role"), 
				array($firstName, $secondName, $email, $password, 2, $phone, $gender, $role)
			);
			
			Messages::success("Doctor has been added successfully");
		} else {
			self::edit($token, $firstName, $secondName, $email, $phone, $role);
		}
	}
	
	
	
	public static function getArray($name, $labelDistance){
		$nextLabel = 12 - (int) $labelDistance; 
		$query = Db::fetch("users", "", "status = ? ", "2", "id DESC", "", "");
		$array = array(); 
		echo "<div class='form-group'>
				<label class='col-md-".$labelDistance."' >Doctors</label>
				<div class='col-md-".$nextLabel."'>
				<select name='$name' class='form-control'>
					<option value='' >--Select a Doctor--</option>
				";
				
		while($data = Db::assoc($query)){
			$token = $data['token']; 
			$firstName = User::get($token,"firstName"); 
			$secondName = User::get($token, "secondName"); 
			
			echo "<option value='$token'>$firstName $secondName</option> ";
		}
		echo "</select></div></div> ";
	}
	
	public static function delete($token){
		Db::delete("users", "token = ? ", $token);
	}
	
	
}