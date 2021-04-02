<?php 

class Config{

	const DB_HOST = "localhost"; 
	const DB_NAME = "sad";
	const DB_USER = "root";
	const DB_PASSWORD = "root"; 


	//METHODS
	// kindly do not edit methods
	// they are constant methods that are used all over in the system
	// editing these methods may lead to false data due to misconfiguration.
	public static function redir($page){
		header("Location: $page"); 
	}

	public static function includeD(){

	}


	public static function getMonth(){
		// pleae do not edit this
		// this represents the number of seconds ni a month
		// editing this will lead to false values
		return 2419200;
	}


	public static function getWeek(){
		// pleae do not edit this
		// this represents the number of seconds ni a month
		// editing this will lead to false values
		return 604800;
	}



}