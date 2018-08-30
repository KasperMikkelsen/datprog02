<?php 
include_Once "connect.php";
	
 if($_POST)
{
    $sql = "INSERT INTO `person` (firstname)
    VALUES ('".$_POST["firstname"]."')";

    $sql1 = "INSERT INTO `car` (brand, personid)
    VALUES ('".$_POST["carbrand"]."', LAST_INSERT_ID())";

    $sql2 = "INSERT INTO `job` (job, personid)
    VALUES ('".$_POST["jobname"]."', LAST_INSERT_ID())";

    $sql3 = "INSERT INTO `pet` (petname, personid )
    VALUES ('".$_POST["pet"]."', LAST_INSERT_ID())";

    


    echo "$sql";
    $result = mysqli_query($conn,$sql);
    $result1 = mysqli_query($conn,$sql1);
    $result2 = mysqli_query($conn,$sql2);
    $result3 = mysqli_query($conn, $sql3);
   	
    header("location: index.php");
}
$conn->close();


?>

<form method="post" > 
<label id="firstname"> Type your name here:</label><br/>
<input type="text" name="firstname"><br/>


<label id="carmodel"> Do you own a car?, then type the car brand here:</label><br/>
<input type="text" name="carbrand"> <br>

<label id="job">What job do you have?</label><br>
<input type="text" name="jobname"><br>

<label id="petname">what kind of pet do you have?</label><br>
<input type="text" name="pet"><br>



<button type="submit" name="save">Submit</button>

</form>

