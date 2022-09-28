
<!-- Add employee Modal -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
            </div>
            <div class="modal-body">
                <form id="addEmployee" action="">
                    <div class="mb-3 row">
                        <label for="empFirstName" class="col-md-3 form-label">FirstName</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="empFirstName" name="FirstName">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="empLastName" class="col-md-3 form-label">FirstName</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="empLastName" name="LastName">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="empEmail" class="col-md-3 form-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="empEmail" name="Email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="empSpecialization" class="col-md-3 form-label">Specialization</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="empSpecialization" name="Specialization">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button onclick="addNewEmployee()" type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- update employee Modal -->
<div class="modal fade" id="updateEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Employee</h5>
            </div>
            <div class="modal-body">
                <form id="addEmployee" action="">
                    <div class="mb-3 row">
                        <label for="updateEmpFirstName" class="col-md-3 form-label">FirstName</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="updateEmpFirstName" name="FirstName">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="updateEmpLastName" class="col-md-3 form-label">FirstName</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="updateEmpLastName" name="LastName">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="updateEmpEmail" class="col-md-3 form-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="updateEmpEmail" name="Email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="updateEmpSpecialization" class="col-md-3 form-label">Specialization</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="updateEmpSpecialization" name="Specialization">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button onclick="updateEmpDetails()" type="button" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="hidden" id="hiddenData">

            </div>
        </div>
    </div>
</div>


