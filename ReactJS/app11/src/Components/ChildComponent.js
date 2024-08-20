import { useState } from "react";

function ChildComponent(Props) {
    let [counter, setCounter] = useState(0);

    return <>
        <h1>Value of Counter is {counter}</h1>
        <button onClick={function(){
            setCounter(counter + 1);
            Props.printer(counter + 1)
        }}>UPdate Counter</button>
    </>

}

export default ChildComponent;