<?php


include 'connection.php';


// sql to delete a record

if (isset($_POST['sentID'])) {

    $id = $_POST['sentID'];
    $sql = "DELETE FROM employees WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $response = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $response = $row;
    }
    echo json_encode($response);

}else{
    $response['status']=200;
    $response['message']="invalid or data not found";

}


if (isset($_POST['hiddenData'])) {

    $firstName = $_POST['sentFirstName'];
    $lastName = $_POST['sentLastName'];
    $email = $_POST['sentEmail'];
    $specialization = $_POST['sentSpecialization'];

    $id = $_POST['hiddenData'];
    $sql = "UPDATE employees SET FirstName = '$firstName' , LastName = '$lastName' , Email = '$email', Specialization = '$specialization',  WHERE id='$id'";
$result = mysqli_query($conn,$sql);
}




if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

?>