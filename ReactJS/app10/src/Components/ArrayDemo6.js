import Printer from "./Printer";

function ArrayDemo6(){

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
            <h1 className="bg-primary text-white text-center p-3">Print Data with Reuseble Components</h1>
            <div className="row">
                {
                    students.map((student)=> <div className="col-md-6">
                        <Printer data={student}></Printer>
                    </div>)
                }
            </div>
        </div>
    </>
}

export default ArrayDemo6;