// UseMemo Hook

import { useMemo, useState } from "react";

function PureComponent5(){
    let [counter1, setCounter1] = useState(0);
    let [counter2, setCounter2] = useState(0);


    useMemo(()=>{
        console.log("Counter 1 Updated");
    }, [counter1]);

    useMemo(()=>{
        console.log("Counter 2 Updated");
    }, [counter2]);

    return <>
        <h1>Example of UseMemo Hooks</h1>
        <h1>Counter 1 is {counter1} and Counter 2 is {counter2}</h1>
        <hr />
        <button onClick={()=>setCounter1(counter1 + 1)}>Update Counter 1 </button>
        <button onClick={()=>setCounter2(counter2 + 1)}>Update Counter 2 </button>
    </>
}

export default PureComponent5;