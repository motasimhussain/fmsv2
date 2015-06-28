<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imp_exp extends CI_Model {

	public function import()
	{
		//ENTER THE RELEVANT INFO BELOW
		$mysqlDatabaseName ='fmsv2';
		$mysqlUserName ='root';
		$mysqlPassword ='""';
		$mysqlHostName ='localhost';
		$mysqlImportFilename ='d:/pjic_2015-06-15-19-01-57.sql';

		//DO NOT EDIT BELOW THIS LINE
		//Export the database and output the status to the page
		$command='mysql -h' .$mysqlHostName .' -u' .$mysqlUserName .' --password=' .$mysqlPassword .' ' .$mysqlDatabaseName .' < ' .$mysqlImportFilename;
		$output = array();
		exec($command,$output,$worked);
		switch($worked){
		    case 0:
		        return true;
		        break;
		    case 1:
		        return false;
		        break;
		}
	}

	public function export($location = 'd:/')
	{
		$db_name = 'pjic';
		$user = 'root';
		$pass='""';
		$command = "mysqldump -u $user --password=$pass $db_name > $location".$db_name."_".date("Y-m-d-H-i-s").".sql";

		system($command);
	}

}

/* End of file Imp_exp.php */
/* Location: ./application/models/Imp_exp.php */