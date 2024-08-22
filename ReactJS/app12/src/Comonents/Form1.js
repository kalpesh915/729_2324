import { useState } from "react";

function Form1(){

    let [fname, setFname] = useState("");
    let [lname, setLname] = useState("");

    // function for handle submit event
    function handleForm(e){
        e.preventDefault();
        
        setFname(e.target.fname.value);
        setLname(e.target.lname.value);
        console.log("Welcome "+fname+" "+lname);
    }

    return <>
        <form onSubmit={handleForm}>
            <div>
                <label>Enter First Name : </label>
                <input type="text" id="fname" name="fname" defaultValue={fname}></input>
            </div>
            <div>
                <label>Enter Last Name : </label>
                <input type="text" id="lname" name="lname" defaultValue={lname}></input>
            </div>
            <div>
                <input type="submit" value="Send Data" ></input>
                <input type="reset" value="Reset" ></input>
            </div>
        </form>
    </>
}

export default Form1;