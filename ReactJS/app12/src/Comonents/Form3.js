function Form3(){

    function handleForm(e){
        e.preventDefault();
        let myFormData = new FormData(e.target);
        console.log(myFormData);
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

export default Form3;