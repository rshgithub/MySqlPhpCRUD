<!DOCTYPE html>
<html lang="en">

<head>
    <title>training project</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>

<?php include('modal.php'); ?>

<div class="container">
    <h1> PHP CRUD With AJAX </h1>

    <div class="row">
        <div class="row">

            <div class="col-md-12 head">
                <h5>Employees</h5>
                <!-- Add link -->
                <div class="float-right">
                    <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"
                       class="btn btn-success btn-sm">Add Employee</a>
                </div>
            </div>


            <!-- List the members -->
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Specialization</th>
                    <th>Created</th>
                    <th>Editing</th>
                </tr>
                </thead>

                <tbody>
                <?php if(!empty($employees)){
                    $count = 0;
                    foreach($employees as $row){
                        $count++; ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['FirstName']; ?></td>
                            <td><?php echo $row['LastName']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Specialization']; ?></td>
                            <td><?php echo $row['Created']; ?></td>
                            <td>
                                <a href="addEdit.php?id=<?php echo $row['EmployeeID']; ?>" class="btn btn-warning">edit</a>
                                <a href="userAction.php?action_type=delete&id=<?php echo $row['EmployeeID']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?');">delete</a>
                            </td>
                        </tr>
                    <?php }
                }else{ ?>
                    <tr><td colspan="7">No employee(s) found...</td></tr>
                <?php } ?>
                </tbody>

            </table>

        </div>

        <?php include('modal.php'); ?>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
        displayData();
    });


    function displayData() {
        var displayData = true;
        $.ajax({
            url: "display.php",
            type: "post",
            data: {
                sentData: displayData,
            },
            success: function (data, status) {
                console.log(status);
                $('#displayDataTable').html(data);
            }
        });
    }


    function addNewEmployee() {

        var firstName = $('#empFirstName').val();
        var lastName = $('#empLastName').val();
        var email = $('#empEmail').val();
        var specialization = $('#empSpecialization').val();
        if (firstName != "" && lastName != "" && email != "" && specialization != "") {
            $.ajax({
                url: "insertEmp.php",
                type: "post",
                data: {
                    sentFirstName: firstName,
                    sentLastName: lastName,
                    sentEmail: email,
                    sentSpecialization: specialization
                },

                success: function (data, status) {
                    console.log(data);
                    console.log(status);
                }
            });


        }
    }

    function getEmployee(empID) {
        $('#hiddenData').val(empID);
        $('#updateEmployeeModal').modal("show");
        $.post("updateEmp.php", {updateEmployee: empID}, function (data, status) {
                var id = JSON.parse(data);
                $('#updateEmpFirstName').val()(id.FirstName);
                $('#updateEmpLastName').val()(id.LastName);
                $('#updateEmpEmail').val()(id.Email);
                $('#updateEmpSpecialization').val()(id.Specialization);

            }
        )

    }

    function updateEmpDetails() {
        var updateFirstName = $('#updateEmpFirstName').val();
        var updateLastName = $('#updateEmpLastName').val();
        var updateEmail = $('#updateEmpEmail').val();
        var updateSpecialization = $('#updateEmpSpecialization').val();
        var hiddenData = $('#hiddenData').val();

        $.post("updateEmp.php",
            {
                updateFirstName : updateEmpFirstName,
                updateLastName : updateEmpLastName,
                updateEmail : updateEmpEmail,
                updateSpecialization : updateEmpSpecialization,
            },
            function (data, status) {
                $('#updateEmployeeModal').modal("hide");
                displayData();
            }
        )
    }


    function deleteEmp(empID) {
        if (confirm("Are you sure want to delete this User ? ")) {
            $.ajax({
                url: "deleteEmp.php",
                data: {
                    sentID: empID,
                },
                type: "post",
                success: function (data, status) {
                    console.log(data);
                    console.log(status);
                    displayData();
                }
            });
        } else {
            return null;
        }
    }

</script>
</body>
</html>