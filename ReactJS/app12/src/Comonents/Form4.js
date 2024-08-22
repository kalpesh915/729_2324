function Form4(){

    function handleForm(e){
        e.preventDefault();
        let fname = document.getElementById("fname").value;
        let lname = document.getElementById("lname").value;
        console.log("welcome "+fname+" "+lname);
    }

    return <>
    <h1>UnController Comonents</h1>
        <form onSubmit={handleForm}>
            <div>
                <label>Enter First Name : </label>
                <input type="text" id="fname" name="fname"></input>
            </div>
            <div>
                <label>Enter Last Name : </label>
                <input type="text" id="lname" name="lname"></input>
            </div>
            <div>
                <input type="submit" value="Send Data" ></input>
                <input type="reset" value="Reset" ></input>
            </div>
        </form>
    </>
}

export default Form4;