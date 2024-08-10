import { useState } from "react";

function StateDemo1(){
    // Hooks 
    let [username, setUsername] = useState("Bhavdip Sorathiya");
    return <>
        <h1>Example of State in Function Component</h1>
        {/* {username = "Demo";}
            username = "Demo"; */}
        <h1>Welcome {username} to world of React JS</h1>
    </>
}

export default StateDemo1;