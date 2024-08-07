import { useState } from "react";

function EventDemo4(){
    let [ip, setIp] = useState(10);

    return <>
        <h1>Value of ip is {ip}</h1>
        <button type="button" onClick={()=>setIp(ip++)}>Increment</button>
    </>
}

export default EventDemo4;