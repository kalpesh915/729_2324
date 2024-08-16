import { useState } from "react";

function HooksDemo1(){
    // create new state
    let [count, setCount] = useState(1);
    return <>
        <div>
            <h1>Hooks Example </h1>
            <h1>Value of Count is {count}</h1>
            {/* <button onClick={()=>setCount(count++)}>Update</button> */}
            {/* <button onClick={()=>setCount(++count)}>Update</button> */}
            <button onClick={()=>setCount(count+1)}>Update</button>
        </div>
    </>
}

export default HooksDemo1;