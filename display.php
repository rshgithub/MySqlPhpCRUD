<?php

include 'connection.php';

if (isset($_POST['sentData'])) {
    $table = '<table id="displayDataTable" class="table table-striped table-bordered">
              <thead class="thead-dark">
                    <tr>
                        <th>id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Specialization</th>  
                        <th>Operations</th>  
                    </tr>
             </thead>
    ';
}


$sql = "SELECT * FROM employees";
$result = mysqli_query($conn, $sql);
$number =1;

while ($row = mysqli_fetch_assoc($result)) {
    $table= '<tr>
                        <td scope="row">'.$nnumber.'</td>
                        <td>'.$row['FirstName'].'</td>
                        <td>'.$row['LastName'].'</td>
                        <td>'.$row['Email'].'</td>
                        <td>'.$row['Specialization'].'</td> 
                        <button class="btn badge-warning" onclick="getEmployee('.$row['id'].')">Edit</button>
                        <button class="btn badge-danger" onclick="deleteEmp('.$row['id'].')">Delete</button>
                        <td>

              <tr>';
    $number++;
}

$table= ' </table>';
echo $table;
?>
