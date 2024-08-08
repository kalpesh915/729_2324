import { useState } from "react";

function EventDemo6(){

    let [username, setUserName] = useState("Gaurav Pandya");

    return <>
        <h1>Enter Your Name</h1>
        {/* <input type="text" onKeyUp={(e)=>{setUserName(e.target.value)}} value=
        {username}></input> */}
        <input type="text" onKeyUp={(e)=>{setUserName(e.target.value)}} defaultValue={username}></input>
        <h1>Welcome {username}</h1>
    </>
}

export default EventDemo6;