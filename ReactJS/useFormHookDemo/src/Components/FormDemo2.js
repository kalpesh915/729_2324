import { useForm } from "react-hook-form";

function FormDemo2(){

    const {
        register, 
        handleSubmit, 
        formState:{
    }} = useForm();

    const onSubmit = (data) => {
        console.log(data);
    }
    return<>
        <form onSubmit={handleSubmit(onSubmit)}>
            <div className="my-2 form-floating">
                <input type="text" id="fname" name="fname" placeholder="Enter First Name" className="form-control" {...register("fname")}></input>
                <label htmlFor="fname">Enter First Name</label>
            </div>

            <div className="my-2 form-floating">
                <input type="text" id="lname" name="lname" placeholder="Enter Last Name" className="form-control" {...register("lname")}></input>
                <label htmlFor="lname">Enter Last Name</label>
            </div>

            <div className="my-2 form-floating">
                <input type="city" id="city" name="city" placeholder="Enter City Name" className="form-control" {...register("city")}></input>
                <label htmlFor="city">Enter City Name</label>
            </div>

            <div className="my-2 form-floating">
                <select className="form-select" name="gender" id="gender" required
                {...register("gender")} placeholder="Select Gender">
                    <option></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <label htmlFor="gender">Select Gender</label>
            </div>


            <div className="my-2">
                <input type="submit" value="Send Data" className="btn btn-primary"></input>
                <input type="reset" value="Reset" className="btn btn-danger mx-2"></input>
            </div>
        </form>
    </>
}

export default FormDemo2;