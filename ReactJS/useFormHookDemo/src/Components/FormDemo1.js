import { useState } from "react";

function FormDemo1(){
    const [userData, setUserData] = useState({
        fname:"",
        lname:"",
        city:""
    });

    function handleSubmit(event){
        event.preventDefault();
        console.log(userData);
    }

    function handleInput(event){
        const {name, value} = event.target;
        setUserData((previous)=>({
            ...previous,
            [name]: value
        }));
    }

    return<>
        <form onSubmit={handleSubmit}>
            <div className="my-2 form-floating">
                <input type="text" id="fname" name="fname" placeholder="Enter First Name" className="form-control" defaultValue={userData.fname} onChange={handleInput}></input>
                <label htmlFor="fname">Enter First Name</label>
            </div>

            <div className="my-2 form-floating">
                <input type="text" id="lname" name="lname" placeholder="Enter Last Name" className="form-control" defaultValue={userData.lname} onChange={handleInput}></input>
                <label htmlFor="lname">Enter Last Name</label>
            </div>

            <div className="my-2 form-floating">
                <input type="text" id="city" name="city" placeholder="Enter City Name" className="form-control" defaultValue={userData.city} onChange={handleInput}></input>
                <label htmlFor="city">Enter City Name</label>
            </div>

            <div className="my-2">
                <input type="submit" value="Send Data" className="btn btn-primary"></input>
                <input type="reset" value="Reset" className="btn btn-danger mx-2"></input>
            </div>
        </form>
    </>
}

export default FormDemo1;