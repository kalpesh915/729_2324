import { useState } from "react"

function PropsDemo11(){
    let [username, setUsername] = useState("Bhavdip Sorathiya");
    return <>
        <h1>Welcome to Input Example</h1>
        <input type="text" onChange={(evnt)=>setUsername(evnt.target.value)} defaultValue={username}></input>
        <h1>Welcome {username}</h1>
    </>
}

export default PropsDemo11;