import { useEffect } from "react";

function APICode() {
    const APIURL = "http://localhost:3000/students";

    useEffect(() => {
        // load add stduent data when component is mounted
        loadAllData();
    }, []);

    function loadAllData() {
        // get all students from API and print on console
        fetch(APIURL).then((response) => {
            response.json().then((result) => {
                console.log(result);
            });
        });
    }

    function addNewStudent() {
        /// post API Example
        let fname = prompt("Enter first name");
        let lname = prompt("Enter Last name");

        fetch(APIURL, {
            method: "POST",
            headers: {
                'Accept': 'Application/json',
                'Content-type': 'Application/json',
            },
            body: JSON.stringify({ fname, lname })
        }).then((response) => {
            response.json().then((result) => {
                console.log("New Student Added in Database");
                loadAllData();
            })
        }).catch((error) => {
            console.log(error);
        });
    }

    function updateStudent() {
        let studentid = prompt("Enter Student ID for Update Data");
        let fname = prompt("Enter first name");
        let lname = prompt("Enter Last name");

        fetch(APIURL + "/" + studentid, {
            method: "PUT",
            headers: {
                'Accept': 'Application/json',
                'Content-type': 'Application/json'
            },
            body: JSON.stringify({ fname, lname })
        }).then((response) => {
            if (response.status == 404) {
                console.log("Data not Updated");
            } else {
                response.json().then((result) => {
                    console.log("Student Updated in Database");
                    loadAllData();
                })
            }

        });
    }

    // get one student data
    function getOneStudent() {
        const studentid = prompt("Enter Student ID for find Data");
        fetch(APIURL + "/" + studentid).then((response) => {
            if (response.status == 404) {
                console.log("Student with ID " + studentid + " not Found in Database");
            } else {
                response.json().then((result) => {
                    console.log(result);
                });
            }
        })
    }


    // function for delete student Data
    function deleteStudent(){
        const studentid = prompt("Enter Student ID for Delete Data");
        fetch(APIURL+"/"+studentid, {
            method : "delete"
        }).then((response)=>{
            if(response.status == 404){
                console.log("No Student found for delete with ID "+studentid);
            }else{
                response.json().then((result)=>{
                    console.log("Data Deleted : ",result);
                    loadAllData();
                });
            }
        });
    }

    return <>
        <h1>API Code Example</h1>
        <button onClick={() => { loadAllData() }}>Get All Students</button>
        <button onClick={() => { getOneStudent() }}>Get Student</button>
        <button onClick={() => { addNewStudent() }}>Add New Student</button>
        <button onClick={() => { updateStudent() }}>Update Student</button>
        <button onClick={() => { deleteStudent() }}>Delete Student</button>
    </>
}

export default APICode;