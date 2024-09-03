import { useEffect, useState } from "react";

function Students1() {
    // URl of our API Server
    const API_URL = "http://localhost:3000/students";

    // create required state for store student data
    let [studentid, setStudentId] = useState("");
    let [process, setProcess] = useState(true);
    let [tmpStudent, setTmpStudent] = useState({fname: "", lname: "", city: "", email: "", phone: ""});
    let [students, setStudents] = useState([]);


    function handleFormChange(e){
        let {name, value } = e.target;
        setTmpStudent((prevState) => ({
            ...prevState, [name] : value
        }));
    }

    // Function for Handling Form Submit Event
    function formSubmitEvent(e) {
        e.preventDefault();
        if (process) {
            // add new student code
            fetch(API_URL, {
                // post request
                method: "POST",
                headers: {
                    'Accept': 'Application/json',
                    'Content-Type': 'Application/json'
                },
                body: JSON.stringify(tmpStudent)
            }).then((response) => {
                response.json().then((result) => {
                    // alert("Student Data Created");
                    resetForm();
                    loadAllData();
                    
                })
            });
        } else {
            // update student code
            fetch(API_URL+"/"+studentid, {
                method : "put",
                headers : {
                    'Accept' : 'Application/json',
                    'Content-type' : 'Application/json'
                },
                body : JSON.stringify(tmpStudent)
            }).then((response)=>{
                response.json().then((result)=>{
                    resetForm();
                    loadAllData();
                })
            });
        }

    }

    // function for reset form after process
    function resetForm() {
        setStudentId("");
        setProcess(true);
        setTmpStudent({ fname : "", lname : "", city : "", email : "", phone : ""});
    }

    // load all Data 
    function loadAllData() {
        fetch(API_URL).then((response) => {
            response.json().then((result) => {
                setStudents(result);
            })
        });
    }

    // prevent re render for load students
    useEffect(() => {
        loadAllData();
    }, []);


    //delete student
    function deleteStudent(studentid) {
        //alert(studentid);
        if (window.confirm("Are you sure to delete this Data with ID " + studentid)) {
            fetch(API_URL + "/" + studentid, {
                method: "delete"
            }).then((response) => {
                response.json().then((result) => {
                    //console.log(result);
                    loadAllData();
                });
            })
        }
    }


    // get student data for edit
    function editStudent(studentid) {
        //alert(studentid);
        // code for get student data from API for edit purpose

        fetch(API_URL + "/" + studentid).then((response) => {
            response.json().then((result) => {
                //console.log(result);
                setStudentId(result.id);
                setTmpStudent({fname : result.fname, lname : result.lname, city: result.city, email : result.email, phone : result.phone});
                setProcess(false);
            })
        })
    }


    return <>
        <div className="container-fluid">
            <h1 className="bg-primary text-center text-white p-5">CRUD API Example with JSON Server</h1>

            <div className="row">
                <div className="col-md-3">
                    <form onSubmit={formSubmitEvent}>
                        <div className="my-3 form-floating">
                            <input type="text" name="fname" id="fname" placeholder="Enter First Name" required className="form-control" onChange={handleFormChange} value={tmpStudent.fname}></input>
                            <label htmlFor="fname" className="form-label">Enter First Name</label>
                        </div>
                        <div className="my-3 form-floating">
                            <input type="text" name="lname" id="lname" placeholder="Enter Last Name" required className="form-control" onChange={handleFormChange} value={tmpStudent.lname}></input>
                            <label htmlFor="lname" className="form-label">Enter Last Name</label>
                        </div>
                        <div className="my-3 form-floating">
                            <input type="text" name="city" id="city" placeholder="Enter City" required className="form-control" onChange={handleFormChange} value={tmpStudent.city}></input>
                            <label htmlFor="city" className="form-label">Enter City</label>
                        </div>
                        <div className="my-3 form-floating">
                            <input type="email" name="email" id="email" placeholder="Enter Email Address" required className="form-control" onChange={handleFormChange} value={tmpStudent.email}></input>
                            <label htmlFor="email" className="form-label">Enter Email Address</label>
                        </div>
                        <div className="my-3 form-floating">
                            <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" required className="form-control" onChange={handleFormChange} value={tmpStudent.phone}></input>
                            <label htmlFor="phone" className="form-label">Enter Phone Number</label>
                        </div>
                        <div className="my-3">
                            {
                                process ? <>
                                    <input type="submit" value="Add New Student" className="btn btn-primary"></input>
                                    <input type="reset" value="Reset" className="btn btn-danger mx-2"></input>
                                </> : <>
                                    <input type="submit" value="Update Student" className="btn btn-primary"></input>
                                    <input type="button" value="Cancel" className="btn btn-danger mx-2" onClick={() => {
                                        setProcess(true);
                                        resetForm();
                                    }}></input>
                                </>
                            }

                        </div>
                    </form>
                </div>
                <div className="col-md-9">
                    <div className="table-responsive">
                        <table className="table table-hover table-striped">
                            <thead className="table-dark">
                                <tr>
                                    {/* <th>ID</th> */}
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>City</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                {
                                    students.map((student, key) => <tr key={student.id}>
                                        {/* <td>{student.id}</td> */}
                                        <td>{student.fname}</td>
                                        <td>{student.lname}</td>
                                        <td>{student.city}</td>
                                        <td>{student.email}</td>
                                        <td>{student.phone}</td>
                                        <td>
                                            <button type="button" className="btn btn-danger" onClick={() => deleteStudent(student.id)}><i className="fa fa-trash"></i></button>
                                            <button type="button" className="btn btn-primary mx-2" onClick={() => editStudent(student.id)}><i className="fa fa-pen"></i></button>
                                        </td>
                                    </tr>)
                                }
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </>
}

export default Students1;