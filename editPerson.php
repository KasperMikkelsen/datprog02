<?php
include_once "connect.php";
include "personList.php";


if ($_POST) 
{
	$sql = "UPDATE person SET firstname =('".$_POST["firstname"]."') WHERE id =('".$_POST["id"]."')";
	$sql1 = "UPDATE car SET brand =('".$_POST["carbrand"]."') WHERE id =('".$_POST["id"]."')";
	$sql2 = "UPDATE job SET job =('".$_POST["job"]."') WHERE id =('".$_POST["id"]."')";
	$sql3 = "UPDATE pet SET petname =('".$_POST["pet"]."') WHERE id =('".$_POST["id"]."')";


	$result = $conn->query($sql);
	$result1 = $conn->query($sql1);
	$result2 = $conn->query($sql2);
	$result3 = $conn->query($sql3);
	header("location: index.php");
}


?>
<h5>All fields wtih * is need to be filled</h5>
<form method="post" > 
<br>
<label>id *</label><br>
<input type="text" name="id"> <br>

<label id="firstname">Name *</label><br/>
<input type="text" name="firstname"><br/>

<label id="carbrand">Car *</label><br>
<input type="text" name="carbrand"><br>

<label id="job">Job *</label><br>
<input type="text" name="job"><br>

<label id="pet">Pet *</label><br>
<input type="text" name="pet"><br>

<button type="submit" name="save">Edit Person firstname</button>

</form>