
<?php require_once("db.php"); ?>
<?php


        $DB_HOST = "localhost:3312";
		$DB_USER = "root";
		$DB_PASS= "";
		$DB_NAME = "";
	
	
	//database connection_aborted
	$connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	$db = mysql_select_db("elearning_system");
	



  //create accelaration table ----------------------------------------------
	mysql_query ("CREATE TABLE IF NOT EXISTS `eLearning_System` .`user_regis`
     (
		reg_user_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
		reg_first_name VARCHAR(255)   NOT NULL,
		reg_last_name VARCHAR(255)   NOT NULL,
		reg_username VARCHAR(255)    NOT NULL,
		reg_user_email VARCHAR(255)   NOT NULL,
		reg_user_pass VARCHAR(255)    NOT NULL,
		reg_validation_key INTEGER NOT NULL,
		reg_registration_date TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP,
		isActive INTEGER NOT NULL DEFAULT '0' ,
		user_user_id INTEGER NOT NULL
			
		
		
     )");

	if(mysql_query($connection, $sql))
	{
        echo "Table accelaration created successfully<br>";
	} 
	else 
	{
	    echo "Error creating accelaration table: " . mysqli_error($connection). "<br>";
	}




?>