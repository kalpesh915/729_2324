import { useParams } from "react-router-dom";

function Greetings(){
    let {id} = useParams();
    let {fname} = useParams();
    let {lname} = useParams();
    let {city} = useParams();
    return <>
        <div className="container-fluid p-5 text-white bg-primary">
            <h1 className="display-1 p-2">Welcome {fname} {lname} to {city} your id is {id}</h1>
        </div>
    </>
}

export default Greetings;