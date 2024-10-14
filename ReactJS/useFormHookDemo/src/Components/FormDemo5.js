import { useForm } from "react-hook-form";

function FormDemo5() {

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
                <input type="text" id="fname" name="fname" placeholder="Enter First Name" className="form-control" {...register("fname",
                    {
                        required: "First Name is Required",
                        minLength: {
                            value: 3,
                            message: "First Name should minimum 3 Charcaters"
                        }, maxLength: {
                            value: 10,
                            message: "First Name maximum contain only 10 Characters"
                        }
                    })}></input>
                <label htmlFor="fname">Enter First Name</label>
                {(errors.fname && (<p className="text-danger">{errors.fname.message}</p>))}
            </div>

            <div className="my-2 form-floating">
                <input type="text" id="lname" name="lname" placeholder="Enter Last Name" className="form-control" {...register("lname", {
                    required: "Last Name Requried", minLength: {
                        value: 3,
                        message: "Last Name Must Requiered 3 Characters"
                    }, maxLength: {
                        value: 10,
                        message: "Last Name not More than 10 Characters"
                    }
                })}></input>
                <label htmlFor="lname">Enter Last Name</label>
                {(errors.lname && (<p className="text-danger">{errors.lname.message}</p>))}
            </div>

            <div className="my-2 form-floating">
                <input type="text" id="city" name="city" placeholder="Enter City Name" className="form-control" {...register("city", {
                    required: {
                        value: true,
                        message: "City Name is Required"
                    },
                    minLength:{
                        value:3,
                        message:"City Name Must be 3 or more characters"
                    },
                    maxLength:{
                        value:10,
                        message:"City Name not more then 10 characters"
                    }
                })}></input>
                <label htmlFor="city">Enter City Name</label>
                {(errors.city && (<p className="text-danger">{errors.city.message}</p>))}
            </div>

            <div className="my-2">
                <input type="submit" value="Send Data" className="btn btn-primary"></input>
                <input type="reset" value="Reset" className="btn btn-danger mx-2"></input>
            </div>
        </form>
    </>
}

export default FormDemo5;