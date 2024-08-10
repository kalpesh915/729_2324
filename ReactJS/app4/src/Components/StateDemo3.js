import { useState } from "react";

function StateDemo3(){
    // Hooks 
    let [username, setUsername] = useState("Bhavdip Sorathiya");
    return <>
        <h1>Example of State in Function Component</h1>
        {/* <input type="text" onKeyUp={(e)=>setUsername(e.target.value)} /> */}
        <input type="text" onKeyUp={(e)=>setUsername(e.target.value.toUpperCase())} />
        <h1>Welcome {username} to world of React JS</h1>
    </>
}

export default StateDemo3;