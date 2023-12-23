////////mysqli/////////

<?php

$con= new mysqli("localhost","root","","blog_webprog");
$con->set_charset("utf8");
$query = "INSERT INTO `categoris` (`id`, `title`) VALUES (6, 'دسته 6')";
// $query = "DELETE FROM `categoris`";
// $query = "SELECT * FROM `categoris`";

$result= $con->query($query);

if ($result === TRUE) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . $query . "<br>" . $con->error;
}

?>



////////PDO/////////


<?php

$con = new PDO("mysql:host=localhost;dbname=blog_webprog;charset=utf8", "root", "");

$query = "INSERT INTO categoris (id, title) VALUES (8, 'دسته 8')";

$result = $con->query($query);

if ($result === true) {
    echo "Record inserted successfully.";
} else {
    echo "Error";
}

?>






























