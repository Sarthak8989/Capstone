<?php 

class Dashboard extends DashboardUi{ // using inheritance
	
	public static function patients(){
		$query = Db::fetch("patients", "", "", "", "", "", "number");
		return Db::count($query);
	}
		
	public static function doctors(){
		$query = Db::fetch("users", "", "status = ? ", "2", "", "",  "");
		return Db::count($query);
	}
	
	
	
}