import { useState } from "react";

function StateDemo2(){
    // Hooks 
    let [username, setUsername] = useState("Bhavdip Sorathiya");
    return <>
        <h1>Example of State in Function Component</h1>
        {/* {setUsername("Jayrajsinh")} */}
        <h1>Welcome {username} to world of React JS</h1>
        <button onClick={()=>setUsername("Parmar Jayrajsinh")}>Change Name</button>
    </>
}

export default StateDemo2;