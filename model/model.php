<?php
include"connect.php";

class model
{
	public function std_info(){
        $DB=new database();
		$sql="select * from std_tbl";
		$stmt=$DB->connection()->prepare($sql);
		$stmt->execute();
	    return $stmt->fetchAll();
	}

}

?>