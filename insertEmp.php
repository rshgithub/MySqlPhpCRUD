<?php

include 'connection.php';

extract($_POST);

$firstName = $_POST['sentFirstName'];
$lastName = $_POST['sentLastName'];
$email = $_POST['sentEmail'];
$specialization = $_POST['sentSpecialization'];


if (isset($firstName) && isset($lastName) && isset($email) && isset($specialization)) {

    $sql = "INSERT INTO employees (FirstName, LastName, Email, Specialization) VALUES ('$firstName','$lastName','$email','$specialization')";
    $result = mysqli_query($conn, $sql);

}


if ($result) {
    echo ' Your Record Has Been Saved in the Database';
} else {
    echo ' Please Check Your Query ';
}

?>