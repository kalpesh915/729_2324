function ArrayDemo4(){

    const students = [
        {id : 1, fname : "Gaurav", lname : "Pandya", city : "Ahamdabad", gender : "Male", phone: "9988776688", email:"demo@gmail.com"},
        {id : 2, fname : "Bhavdeep", lname : "Sorathiya", city : "Rajkot", gender : "Male", phone: "9988776688", email:"demo@gmail.com"},
        {id : 3, fname : "Udit", lname : "Ghetiya", city : "Shapar", gender : "Male", phone: "9988776688", email:"demo@gmail.com"},
        {id : 4, fname : "Yagnik", lname : "Yadav", city : "Bhavnagar", gender : "Male", phone: "9988776688", email:"demo@gmail.com"},
        {id : 5, fname : "Yograjsinh", lname : "Rana", city : "Surendranagar", gender : "Male", phone: "9988776688", email:"demo@gmail.com"},
        {id : 6, fname : "Yash", lname : "Vaghela", city : "Rajkot", gender : "Male", phone: "9988776688", email:"demo@gmail.com"},
        {id : 7, fname : "Adarsh", lname : "Chavda", city : "Rajkot", gender : "Male", phone: "9988776688", email:"demo@gmail.com"},
        {id : 8, fname : "Tushar", lname : "Kadam", city : "Rajkot", gender : "Male", phone: "9988776688", email:"demo@gmail.com"},
        {id : 9, fname : "Neel", lname : "Kanpariya", city : "Rajkot", gender : "Male", phone: "9988776688", email:"demo@gmail.com"},
        {id : 10, fname : "Jayrajsinh", lname : "Parmar", city : "Ahamdabad", gender : "Male", phone: "9988776688", email:"demo@gmail.com"},
      ];
    

    return <>
        <div className="container-fluid">
            <h1 className="bg-primary text-white text-center p-3">Array Demo with MAP and Bootstrap</h1>
            <table className="table table-hover table-striped">
                <thead>
                    <tr className="table-dark">
                        <th>Key</th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                {
                    students.map((student, keyValue) => <tr key={keyValue}>
                        <td>{keyValue}</td>
                        <td>{student.id}</td>
                        <td>{student.fname}</td>
                        <td>{student.lname}</td>
                        <td>{student.city}</td>
                        <td>{student.gender}</td>
                        <td>{student.phone}</td>
                        <td>{student.email}</td>
                    </tr>)
                }
                </tbody>
            </table>
            {/* <p>Welc<b>Ok</p>ome</b> */}
        </div>
    </>
}

export default ArrayDemo4;