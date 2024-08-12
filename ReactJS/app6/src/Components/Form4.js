import { useState } from "react";

function Form4(){

    let [userData, setUserData] = useState({ fname : "", lname : ""});

    function formProcess(evt){
        //alert("Called");
        evt.preventDefault();
        setUserData({
            fname : evt.target.fname.value,
            lname : evt.target.lname.value,
        });
    }

    return <>
        <form onSubmit={formProcess}>
            <h1 className="bg-primary text-white text-center p-4">Welcome {userData.fname} {userData.lname}</h1>
            <h1>Form Example</h1>
            <div className="my-3 form-floating">
                <input type="text" name="fname" id="fname" required className="form-control" placeholder="Enter First Name"></input>
                <label className="form-label" htmlFor="fname">Enter First Name</label>
            </div>
            <div className="my-3 form-floating">
                <input type="text" name="lname" id="lname" required className="form-control" placeholder="Enter Last Name"></input>
                <label className="form-label" htmlFor="lname">Enter Last Name</label>
            </div>
            <div className="my-3">
                <input type="submit" value="Send Data" className="btn btn-primary" />
                <input type="reset" value="Reset" className="btn btn-danger" />
            </div>
        </form>
    </>
}

export default Form4;