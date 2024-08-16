import React, { useState, useEffect } from "react";

function HooksDemo3(){
    let [counter, setCounter] = useState(0);

    useEffect(()=>{
        console.log("Use Effect Function Called");
        // Never update any state or props in useEffect Hooks
        // setCounter(counter+1);
    });

    return <>
        <div>
            <h1>Use Effect Example</h1>
            <h1>Counter is {counter}</h1>
            <button onClick={()=>setCounter(counter + 1)}>Update</button>
        </div>
    </>
}

export default HooksDemo3;