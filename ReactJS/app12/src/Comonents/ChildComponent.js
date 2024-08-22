import { forwardRef } from "react"

function ChildComponent(props, reference){
    // console.log(ref);
    return <>
        <h1>Example of Forward Ref in ReactJS</h1>
        <input type="text" ref={reference}></input>
    </>
}

export default forwardRef(ChildComponent);