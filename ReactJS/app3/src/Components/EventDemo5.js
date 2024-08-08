import { useState } from "react";

function EventDemo5(){

    let [username, setUserName] = useState("");

    return <>
        <h1>Enter Your Name</h1>
        {/* <input type="text" onKeyUp={()=>setUserName("Udit")} /> */}
        {/* <input type="text" onKeyUp={(e)=>{alert(e.target.value)}}></input> */}
        <input type="text" onKeyUp={(e)=>{setUserName(e.target.value)}}></input>
        <h1>Welcome {username}</h1>
    </>
}

export default EventDemo5;