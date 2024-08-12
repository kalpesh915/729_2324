import { useState } from "react";

function Form5(){

    function formProcess(evt){
        evt.preventDefault();
        let formData = new FormData(evt.target);
        console.log(formData);
    }

    return <>
        <form onSubmit={formProcess}>
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

export default Form5;