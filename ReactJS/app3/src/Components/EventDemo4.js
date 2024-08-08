import { useState } from "react";

function EventDemo4(){

    let [ip1, setIp1] = useState(10);

    // function increment(){
    //     ip1++;
    //     console.log(ip1);
    // }

    return <>
        <h1>Event Demo value of ip1 is {ip1}</h1>
        {/* <button onClick={()=>setIp1(100)}>Increment</button> */}
        <button onClick={()=>setIp1(ip1++)}>Increment</button>
    </>
}

export default EventDemo4;