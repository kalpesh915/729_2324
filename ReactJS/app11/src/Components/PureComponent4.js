import { Component, PureComponent } from "react";

class PureComponent4 extends PureComponent{
    constructor(){
        super();
        this.state = {
            countrer : 1
        }
    }

    render(){
        console.log("Render Method Executed");
        return <>
            <h1>Example of Pure Components in React JS</h1> 
            <h1>Counter is {this.state.countrer}</h1>
            <button onClick={()=>this.setState({countrer : Math.ceil(Math.random() * 10)})}>Update</button>
        </>
    }
}

export default PureComponent4;