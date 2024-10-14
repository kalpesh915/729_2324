import { useForm } from "react-hook-form";

function FormDemo4() {

    const {
        register,
        handleSubmit,
        formState: { errors }
    } = useForm();

    const onSubmit = (data) => {
        console.log(data);
    }
    return <>
        <form onSubmit={handleSubmit(onSubmit)}>
            <div className="my-2 form-floating">
                <input type="text" id="fname" name="fname" placeholder="Enter First Name" className="form-control" {...register("fname", { required: true, minLength: 3, maxLength: 10 })}></input>
                <label htmlFor="fname">Enter First Name</label>
                {(errors.fname && errors.fname.type === "required" && (
                <p className="text-danger">First Name is Required</p>))}

                {(errors.fname && errors.fname.type === "minLength" && (
                <p className="text-danger">First Name Should Minimum 3 Characters</p>))}

                {(errors.fname && errors.fname.type === "maxLength" && (
                <p className="text-danger">First Name not Should More than 10 Characters</p>))}
            </div>

            <div className="my-2 form-floating">
                <input type="text" id="lname" name="lname" placeholder="Enter Last Name" className="form-control" {...register("lname", { required: true, minLength: 3, maxLength: 10 })}></input>
                <label htmlFor="lname">Enter Last Name</label>
                {(errors.lname && errors.lname.type === "required" && (
                    <p className="text-danger">Last Name is Required</p>
                ))}

                {(errors.lname && errors.lname.type === "minLength" && (
                    <p className="text-danger">Last Name Should Minimum 3 Characters</p>
                ))}

                {(errors.lname && errors.lname.type === "maxLength" && (
                    <p className="text-danger">Last Name not Should More than 10 Characters</p>
                ))}
            </div>

            <div className="my-2 form-floating">
                <input type="text" id="city" name="city" placeholder="Enter City Name" className="form-control" {...register("city", {required:true})}></input>
                <label htmlFor="city">Enter City Name</label>
                {(errors.city && errors.city.type === "required") && (
                    <p className="text-danger">City Name is Required</p>
                )}
            </div>

            <div className="my-2">
                <input type="submit" value="Send Data" className="btn btn-primary"></input>
                <input type="reset" value="Reset" className="btn btn-danger mx-2"></input>
            </div>
        </form>
    </>
}

export default FormDemo4;