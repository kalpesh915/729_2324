import { useState, useEffect } from "react";

function HooksDemo5(){
    let [next, setNext] = useState(0);
    let [prev, setPrev] = useState(0);
    
    useEffect(()=>{
        console.log("Next State Updated");
    }, [next]);
    
    useEffect(()=>{
        console.log("Prev State Updated");
    }, [prev]);

    return <>
        <h1>Multiple useEffect Hooks Example</h1>
        <h1>Next State is : {next} and Previous State is : {prev}</h1>
        <button onClick={()=>setPrev(prev + 1)}>Prev</button>
        <button onClick={()=>setNext(next + 1)}>Next</button>
    </>
}

export default HooksDemo5;