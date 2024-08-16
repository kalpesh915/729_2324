import { useEffect, useState } from "react";

function HooksDemo7(Props){

    let [counter, setCounter] = useState(0);

    useEffect(()=>{
        console.log("Props Updated");
    }, [Props.data]);

    useEffect(()=>{
        console.log("State Updated");
    }, [counter]);

    return <>
        <h1>useEffect Hooks with Props Example</h1>
        <h1>Props Value is {Props.data}</h1>
        <h1>State Value is {counter}</h1>
        <button onClick={()=>setCounter(counter+1)}>Update State</button>
    </>
}

export default HooksDemo7;