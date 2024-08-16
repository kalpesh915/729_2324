import { useState, useEffect } from "react";

function HooksDemo6(){
    let [next, setNext] = useState(0);
    let [prev, setPrev] = useState(0);
    let [reset, setReset] = useState(0);
    
    // bind multiple state to useEffect Hook
    useEffect(()=>{
        console.log("Question Fetch Request");
    }, [next, prev]);
    
    useEffect(()=>{
        console.log("Reset Request");
    }, [reset]);

    // disabled useEffect Code
    useEffect(()=>{
        console.log("Never Executed");
    }, []);

    return <>
        <h1>Multiple useEffect Hooks Example</h1>
        <h1>Next State is : {next} and Previous State is : {prev}</h1>
        <button onClick={()=>setPrev(prev + 1)}>Prev</button>
        <button onClick={()=>setNext(next + 1)}>Next</button>
        <hr></hr>
        <button onClick={()=>setReset(reset+1)}>Reset</button>
    </>
}

export default HooksDemo6;