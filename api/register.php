<?php
include_once("database.php");
$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata))
{
$request = json_decode($postdata);
$firstname = trim($request->firstname);
$middlename = trim($request->middlename);
$lastname = trim($request->lastname);
$pwd = mysqli_real_escape_string($mysqli, trim($request->password));
$email = mysqli_real_escape_string($mysqli, trim($request->email));
$sql = "INSERT INTO users(FirstName, MiddleName, LastName, Email, Password) VALUES ('$firstname', '$middlename', '$lastname','$email', '$pwd')";
if ($mysqli->query($sql) === TRUE) {
$authdata = [
'FirstName' => $firstname,
'MiddleName' => $middlename,
'LasttName' => $lastname,
'Email' => $email,
'Password' => '',
'Id' => mysqli_insert_id($mysqli)
];
echo json_encode($authdata);
}
}

?>