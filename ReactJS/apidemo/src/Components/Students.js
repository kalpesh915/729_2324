import { useEffect, useState } from "react";

function Students() {
    // URl of our API Server
    const API_URL = "http://localhost:3000/students";

    // create required state for store student data
    let [studentid, setStudentId] = useState("");
    let [process, setProcess] = useState(true);
    let [fname, setFname] = useState("");
    let [lname, setLname] = useState("");
    let [city, setCity] = useState("");
    let [email, setEmail] = useState("");
    let [phone, setPhone] = useState("");
    let [students, setStudents] = useState([]);


    // Function for Handling Form Submit Event
    function formSubmitEvent(e) {
        e.preventDefault();
        //alert("ok");
        if (process) {
            // add new student code
            fetch(API_URL, {
                // post request
                method: "POST",
                headers: {
                    'Accept': 'Application/json',
                    'Content-Type': 'Application/json'
                },
                body: JSON.stringify({ fname, lname, city, email, phone })
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
                body : JSON.stringify({ fname, lname, city, email, phone})
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
        setFname("");
        setLname("");
        setCity("");
        setEmail("");
        setPhone("");
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
                setFname(result.fname);
                setLname(result.lname);
                setCity(result.city);
                setEmail(result.email);
                setPhone(result.phone);
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
                            <input type="text" name="fname" id="fname" placeholder="Enter First Name" required className="form-control" onChange={(e) => setFname(e.target.value)} value={fname}></input>
                            <label htmlFor="fname" className="form-label">Enter First Name</label>
                        </div>
                        <div className="my-3 form-floating">
                            <input type="text" name="lname" id="lname" placeholder="Enter Last Name" required className="form-control" onChange={(e) => setLname(e.target.value)} value={lname}></input>
                            <label htmlFor="lname" className="form-label">Enter Last Name</label>
                        </div>
                        <div className="my-3 form-floating">
                            <input type="text" name="city" id="city" placeholder="Enter City" required className="form-control" onChange={(e) => setCity(e.target.value)} value={city}></input>
                            <label htmlFor="city" className="form-label">Enter City</label>
                        </div>
                        <div className="my-3 form-floating">
                            <input type="email" name="email" id="email" placeholder="Enter Email Address" required className="form-control" onChange={(e) => setEmail(e.target.value)} value={email}></input>
                            <label htmlFor="email" className="form-label">Enter Email Address</label>
                        </div>
                        <div className="my-3 form-floating">
                            <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" required className="form-control" onChange={(e) => setPhone(e.target.value)} value={phone}></input>
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
                                    students.map((student, key) => <tr key={key}>
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

export default Students;