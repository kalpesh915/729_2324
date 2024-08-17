function ArrayDemo1(){

    const students = [
        {id : 1, fname : "Gaurav", lname : "Pandya", city : "Ahamdabad"},
        {id : 2, fname : "Bhavdeep", lname : "Sorathiya", city : "Rajkot"},
        {id : 3, fname : "Udit", lname : "Ghetiya", city : "Shapar"},
        {id : 4, fname : "Yagnik", lname : "Yadav", city : "Bhavnagar"},
        {id : 5, fname : "Yograjsinh", lname : "Rana", city : "Surendranagar"},
        {id : 6, fname : "Yash", lname : "Vaghela", city : "Rajkot"},
        {id : 7, fname : "Adarsh", lname : "Chavda", city : "Rajkot"},
        {id : 8, fname : "Tushar", lname : "Kadam", city : "Rajkot"},
        {id : 9, fname : "Neel", lname : "Kanpariya", city : "Rajkot"},
        {id : 10, fname : "Jayrajsinh", lname : "Parmar", city : "Ahamdabad"},
      ];
    

    return <>
        <h1>Array Demo</h1>

        {
            students.map((student) => <p>
                Welcome {student.fname} {student.lname} to {student.city}
            </p>)
        }
    </>
}

export default ArrayDemo1;