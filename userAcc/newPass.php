<?php
$user = $_POST['user'];
$new = $_POST['pass'];
$conf = $_POST['conf'];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "smiles";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($conn)
{
  echo "connection established";
  $query = 
}

 ?>
