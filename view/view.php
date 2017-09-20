<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

require_once '../controller/BoatController.php';
?>


<html>
<head>
	<title>Homepage</title>
    <link href="../style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Homepage</h1>
	<a href="../index.php">Home</a> | <a href="add.html">Add New Boat</a> | <a href="../logout.php">Logout</a>
	<br/><br/>
	
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Name</td>
			<td>Description</td>
			<td>Weight</td>
            <td>Creator</td>
            <td>Last Update</td>
			<td>Action</td>

		</tr>
		<?php
        $bc = new BoatController();
        $boats = $bc->getAllBoats();

		foreach ($boats as $boat) {
            $user = $bc->getUserName($boat['login_id']);

            echo "<tr>";
			echo "<td>".$boat['name']."</td>";
			echo "<td>".$boat['description']."</td>";
			echo "<td>".$boat['weight']."</td>";
			echo "<td>".$user['name']."</td>";
			echo "<td>".$boat['created']."</td>";
			echo "<td><a href=\"edit.php?id=$boat[id]\">Edit</a> | <a href=\"delete.php?id=$boat[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>	
</body>
</html>
