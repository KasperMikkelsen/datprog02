<?php
include_once "connect.php";
include "personList.php";

if ($_POST) {

	$sql = "DELETE FROM person WHERE id =('".$_POST["id"]."')  AND firstname =('".$_POST["firstname"]."') "; 

	$result = $conn->query($sql);
	header("location: index.php");
}


?>


<form method="post" > 
<br>
<label>id</label><br>
<input type="text" name="id"> <br>

<label id="firstname">Name</label><br/>
<input type="text" name="firstname"><br/>

<button type="submit" name="save">Delete Person</button>

</form>
