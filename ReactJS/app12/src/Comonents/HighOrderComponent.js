import { useState } from "react"

export function HighOrderComponent(Props){
    return <>
        <div style={{border:"1px solid black", padding:"10px", backgroundColor:"powderblue"}}>
            <Props.data></Props.data>
        </div>
    </>
}

export function RedCounter(){
    let [counter, setCounter] = useState(0);
    return <>
        <div style={{backgroundColor:"red", padding:"20px", color:"yellow"}}>
            <h1>Counter is {counter}</h1>
            <button onClick={()=>setCounter(counter+1)}>Update</button>
        </div>
    </>
}

export function GreenCounter(){
    let [counter, setCounter] = useState(0);
    return <>
        <div style={{backgroundColor:"green", padding:"20px", color:"black"}}>
            <h1>Counter is {counter}</h1>
            <button onClick={()=>setCounter(counter+1)}>Update</button>
        </div>
    </>
}

export function BlueCounter(){
    let [counter, setCounter] = useState(0);
    return <>
        <div style={{backgroundColor:"blue", padding:"20px", color:"white"}}>
            <h1>Counter is {counter}</h1>
            <button onClick={()=>setCounter(counter+1)}>Update</button>
        </div>
    </>
}
