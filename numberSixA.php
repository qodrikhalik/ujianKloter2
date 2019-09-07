<?php 
require ('connect.php');
include ('function.php');

$table = 'name';
$field = 'id,name,work_id,id_salary';
$execute = readData($table,$field);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Read</title>
</head>
<meta charset="utf-8"/>

<body style="font-family: calibri">

<table border='1'>		
		<thead>
			<tr>
                <th>Id</th>
				<th>Name</th>
				<th>Work Id</th>
				<th>Salary Id</th>
			</tr>
		</thead>
		<tbody>
            <?php $no = 1; foreach ($execute as $data):?>
			<tr>
				<td><?= $no?></td>
				<td><?= $data['name']; ?></td>
				<td><?= $data['work_id']; ?></td>
				<td><?= $data['id_salary']; ?></td>
            </tr>
            <?php $no++; endforeach;?>
		</tbody>
</table>
</body>
</html>