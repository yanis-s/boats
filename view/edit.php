<?php session_start(); ?>

<?php
if (!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("../controller/BoatController.php");
$bc = new BoatController();

if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $name = $_POST['name'];
    $description = $_POST['description'];
    $weight = $_POST['weight'];

    // checking empty fields
    if (empty($name) || empty($description) || empty($weight)) {

        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if (empty($description)) {
            echo "<font color='red'>Description field is empty.</font><br/>";
        }

        if (empty($weight)) {
            echo "<font color='red'>Weight field is empty.</font><br/>";
        }
    } else {
        //updating the table
        $result = $bc->updateBoat($name, $description, $weight, $id);

        //redirectig to the display page. In our case, it is view.php
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id

$res = $bc->getBoat($id);

$name = $res['name'];
$description = $res['description'];
$weight = $res['weight'];
?>
<html>
<head>
    <title>Edit Boat</title>
    <link href="../style.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Edit a boat</h1>
<a href="../index.php">Home</a> | <a href="view.php">View Boats</a> | <a href="../logout.php">Logout</a>
<br/><br/>

<form name="form1" method="post" action="edit.php" id="#form1">
    <table border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea type="text" name="description" value="<?php echo $description; ?>"><?php echo $description; ?></textarea></td>
        </tr>
        <tr>
            <td>Weight</td>
            <td><input type="number" name="weight" value="<?php echo $weight; ?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
