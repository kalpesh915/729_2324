import { useRef } from "react";

function RefDemo2(){
    let inputRef = useRef();
    return <>
        <h1>Example of References in Function Component</h1>
        <input type="text" ref={inputRef}></input>
        <button onClick={()=>{
            inputRef.current.value = "Welcome to ref";
            inputRef.current.style.color = "red";
            inputRef.current.style.backgroundColor = "Yellow";
            // inputRef.current.type = "password";
        }}>Click Me</button>
    </>
}

export default RefDemo2;