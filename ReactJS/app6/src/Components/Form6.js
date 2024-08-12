import { useState } from "react";

function Form6(){

    let [fname, setFname] = useState("");
    let [lname, setLname] = useState("");

    function resetForm(){
        setFname("");
        setLname("");
    }

    return <>
        <form>
            <h1>Form Example</h1>
            <div className="my-3 form-floating">
                <input type="text" name="fname" id="fname" required className="form-control" placeholder="Enter First Name" onKeyUp={(e)=>setFname(e.target.value)} defaultValue={fname}></input>
                <label className="form-label" htmlFor="fname">Enter First Name</label>
            </div>
            <div className="my-3 form-floating">
                <input type="text" name="lname" id="lname" required className="form-control" placeholder="Enter Last Name" onKeyUp={(e)=>setLname(e.target.value)} defaultValue={lname}></input>
                <label className="form-label" htmlFor="lname">Enter Last Name</label>
            </div>
            <div className="my-3">
                <input type="submit" value="Send Data" className="btn btn-primary" />
                <input type="reset" value="Reset" className="btn btn-danger" onClick={()=>resetForm()} />
            </div>
        </form>

        <h1>Welcome {fname} {lname}</h1>
    </>
}

export default Form6;