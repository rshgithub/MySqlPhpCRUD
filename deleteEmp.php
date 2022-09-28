<?php


include 'connection.php';


// sql to delete a record

if (isset($_POST['sentID'])) {

    $id = $_POST['sentID'];
    $sql = "DELETE FROM employees WHERE id=$id";
    $result = mysqli_query($conn, $sql);

}


if ($result) {
    echo ' Your Record Has Been Deleted From Database Successfully ';
} else {
    echo ' Please Check Your Query ';
}


?>