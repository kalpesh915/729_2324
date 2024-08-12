import { useState } from "react";

function Form1(){

    let [fname, setFname] = useState("");
    let [lname, setLname] = useState("");

    return <>
        <form>
            <h1>Form Example</h1>
            <div className="my-3 form-floating">
                <input type="text" name="fname" id="fname" required className="form-control" placeholder="Enter First Name" onChange={(e)=>setFname(e.target.value)}></input>
                <label className="form-label" htmlFor="fname">Enter First Name</label>
            </div>
            <div className="my-3 form-floating">
                <input type="text" name="lname" id="lname" required className="form-control" placeholder="Enter Last Name" onChange={(e)=>setLname(e.target.value)}></input>
                <label className="form-label" htmlFor="lname">Enter Last Name</label>
            </div>
            <div className="my-3">
                <input type="submit" value="Send Data" className="btn btn-primary" />
                <input type="reset" value="Reset" className="btn btn-danger" />
            </div>
        </form>

        <h1>Welcome {fname} {lname}</h1>
    </>
}

export default Form1;