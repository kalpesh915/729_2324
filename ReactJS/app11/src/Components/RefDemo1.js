import { Component, createRef } from "react";

class RefDemo1 extends Component{
    constructor(){
        super();
        this.inputRef = createRef();
    }

    render(){
        return <>
            <h1>createRef Example in Class of ReactJS</h1>
            <input type="text" ref={this.inputRef}></input>
            <button onClick={()=>{
                //alert("Called");
                //console.log(this.inputRef.current.value);
                // this.inputRef.current.type = "password";
                this.inputRef.current.style.color = "red";
            }}>Print Data</button>
        </>
    }
}

export default RefDemo1;