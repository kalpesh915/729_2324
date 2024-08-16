import { useState, useEffect } from "react";

function HooksDemo4(){
    let [next, setNext] = useState(0);
    let [prev, setPrev] = useState(0);
    
    useEffect(()=>{
        console.log("Next State Updated");
    });
    
    useEffect(()=>{
        console.log("Prev State Updated");
    });

    return <>
        <h1>Multiple useEffect Hooks Example</h1>
        <h1>Next State is : {next} and Previous State is : {prev}</h1>
        <button onClick={()=>setPrev(prev + 1)}>Prev</button>
        <button onClick={()=>setNext(next + 1)}>Next</button>
    </>
}

export default HooksDemo4;