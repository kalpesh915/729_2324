import { useState } from "react";

function Conditional1(){
    let [count, setCount] = useState(0);
    /*{
        if(count >= 10 ){
            <h1>Above 10</h1>
        }else{
            <h1>Less Than 10</h1>
        }   
    } */

    return <>        
        <h1>Conditonal Render Demo</h1>
        <h1>{count}</h1>
        {
            // teranry (condition ? true : false)
            count > 10 ? <h1>Above 10</h1> : <h1>Belove 10</h1>
        }     
        <hr />
        <button onClick={()=>setCount(count + 1)}>Increment</button>
        <button onClick={()=>setCount(count - 1)}>Decrement</button>
    </>
}

export default Conditional1;