<?php


$sql = "SELECT person.id, person.firstname,car.brand, job.job, pet.petname  
FROM person
INNER JOIN car ON car.personid = person.id
INNER JOIN job ON job.personid = person.id
INNER JOIN pet ON pet.personid = person.id";


$result = $conn->query($sql);

if ($result) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. 
        " ---  Name: "."- 	" . $row["firstname"]. 
        " ---  Car brand: ". "- "  . $row["brand"].
        " ---  Job: "."- " . $row["job"].
        " ---  Pet species:"."- " . $row["petname"].  "<br>";
    }
} else {
    echo "0 results";
}


?>