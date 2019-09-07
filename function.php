<?php

function readData ($table,$field,$kondisi = ''){
		global $connect;

		if(is_array($field))
			{ $fieldRead = implode(",",$field); }
		else
			{ $fieldRead = $field; }

		$sql = "SELECT $fieldRead FROM $table $kondisi";
		$execute = mysqli_query($connect,$sql);
		return $execute;
}

?>