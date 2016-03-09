<?php

/**
* Database
*/
class Db
{
	
	public function connect()
	{
		$servername = "localhost";
		$username = "root";
		$password = "root";

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=looksave", $username, $password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    }
		catch(PDOException $e)
		    {
		    echo "Connection failed: " . $e->getMessage();
		    }
	}

	public function login( $username, $password )
	{
		$conn = self::connect();
	}

	public function signup( $username, $password, $cpassword )
	{
		# code...
	}
}
