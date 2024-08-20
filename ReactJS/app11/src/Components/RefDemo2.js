import { useRef } from "react";

function RefDemo2(){

    let inputRef = useRef();
    return <>
        <h1>Exmaple of UseRef Hooks in Function Component</h1>
        <input type="text" ref={inputRef}></input>
        <button onClick={()=>{
            // alert(inputRef.current.value);
            inputRef.current.style.backgroundColor = "yellow";
            inputRef.current.style.color = "red";
        }}>Click Me</button>
    </>
}

export default RefDemo2;