{{-- Bootstrap Models --}}

{{-- Add new Student --}}

<div class="modal fade" id="addnewStudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add New Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addnewStudentForm">
                    <div class="d-none" id="messages"></div>
                    <div class="my-3 form-floating">
                        <input type="text" name="fname" id="fname" required class="form-control"
                            placeholder="Enter First Name">
                        <label class="form-label" for="fname">Enter First Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="lname" id="lname" required class="form-control"
                            placeholder="Enter Last Name">
                        <label class="form-label" for="lname">Enter Last Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="city" id="city" required class="form-control"
                            placeholder="Enter City">
                        <label class="form-label" for="city">Enter City</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="email" name="email" id="email" required class="form-control"
                            placeholder="Enter Email Address">
                        <label class="form-label" for="email">Enter Email Address</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="phone" id="phone" required class="form-control"
                            placeholder="Enter Phone Number">
                        <label class="form-label" for="phone">Enter Phone Number</label>
                    </div>

                    <div class="my-3 form-floating">
                        <select name="gender" id="gender" required class="form-control" placeholder="Select Gender">
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label class="form-label" for="gender">Select Gender</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="number" name="age" id="age" required class="form-control"
                            placeholder="Enter Age">
                        <label class="form-label" for="age">Enter Age</label>
                    </div>

                    <div class="my-3">
                        <input type="submit" value="Add New Student" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

{{-- View Student --}}

<div class="modal fade" id="viewStudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">View Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="my-3 form-floating">
                        <input type="text" id="view_id" readonly class="form-control" placeholder="Enter ID">
                        <label class="form-label" for="view_id">Enter ID</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" id="view_fname" readonly class="form-control"
                            placeholder="Enter First Name">
                        <label class="form-label" for="view_fname">Enter First Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" id="view_lname" readonly class="form-control"
                            placeholder="Enter Last Name">
                        <label class="form-label" for="view_lname">Enter Last Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" id="view_city" readonly class="form-control" placeholder="Enter City">
                        <label class="form-label" for="view_city">Enter City</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="email" id="view_email" readonly class="form-control"
                            placeholder="Enter Email Address">
                        <label class="form-label" for="view_email">Enter Email Address</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" id="view_phone" readonly class="form-control"
                            placeholder="Enter Phone Number">
                        <label class="form-label" for="view_phone">Enter Phone Number</label>
                    </div>

                    <div class="my-3 form-floating">
                        <select id="view_gender" readonly class="form-control" placeholder="Select Gender">
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label class="form-label" for="view_gender">Select Gender</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="number" id="view_age" readonly class="form-control" placeholder="Enter Age">
                        <label class="form-label" for="view_age">Enter Age</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

{{-- Edit Student --}}

<div class="modal fade" id="editStudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editStudentForm">
                    <div class="d-none" id="edit_messages"></div>

                    <div class="my-3 form-floating">
                        <input type="text" name="id" id="edit_id" readonly class="form-control"
                            placeholder="Enter ID">
                        <label class="form-label" for="edit_id">Enter ID</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="fname" id="edit_fname" required class="form-control"
                            placeholder="Enter First Name">
                        <label class="form-label" for="edit_fname">Enter First Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="lname" id="edit_lname" required class="form-control"
                            placeholder="Enter Last Name">
                        <label class="form-label" for="edit_lname">Enter Last Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="city" id="edit_city" required class="form-control"
                            placeholder="Enter City">
                        <label class="form-label" for="edit_city">Enter City</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="email" name="email" id="edit_email" required class="form-control"
                            placeholder="Enter Email Address">
                        <label class="form-label" for="edit_email">Enter Email Address</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="phone" id="edit_phone" required class="form-control"
                            placeholder="Enter Phone Number">
                        <label class="form-label" for="edit_phone">Enter Phone Number</label>
                    </div>

                    <div class="my-3 form-floating">
                        <select name="gender" id="edit_gender" required class="form-control"
                            placeholder="Select Gender">
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label class="form-label" for="edit_gender">Select Gender</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="number" name="age" id="edit_age" required class="form-control"
                            placeholder="Enter Age">
                        <label class="form-label" for="edit_age">Enter Age</label>
                    </div>

                    <div class="my-3">
                        <input type="submit" value="Update Student" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
