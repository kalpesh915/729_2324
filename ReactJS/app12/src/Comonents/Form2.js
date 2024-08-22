import { useState } from "react";

function Form2(){

    let [fname, setFname] = useState("");
    let [lname, setLname] = useState("");


    return <>
        <form>
            <div>
                <label>Enter First Name : </label>
                <input type="text" id="fname" name="fname" defaultValue={fname} onChange={(e)=>setFname(e.target.value)}></input>
            </div>
            <div>
                <label>Enter Last Name : </label>
                <input type="text" id="lname" name="lname" defaultValue={lname} onChange={(e)=>setLname(e.target.value)}></input>
            </div>
            <div>
                <input type="submit" value="Send Data" ></input>
                <input type="reset" value="Reset" ></input>
            </div>
        </form>

        <h1>Welcome {fname} {lname}</h1>
    </>
}

export default Form2;