import { useState } from "react";

function PreviousState(){
    let [counter, setCounter] = useState(0);
    return <>
        <h1>Counter is {counter}</h1>
        {/* <button onClick={()=>setCounter(counter+1)}>Update</button> */}
        {/* <button onClick={()=>setCounter((previousState)=>previousState+1)}>Update</button> */}
        {/* <button onClick={()=>setCounter(Math.ceil(Math.random()*100))}>Update</button> */}
        <button onClick={()=>setCounter((PreviousState)=>{
            console.log(PreviousState);
            return Math.ceil(Math.random()*100)})}
        >Update</button>
    </>
}

export default PreviousState;