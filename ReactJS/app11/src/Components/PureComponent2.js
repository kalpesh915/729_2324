import { Component } from "react";

class PureComponent2 extends Component{
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
            <button onClick={()=>this.setState({countrer : 10})}>Update</button>
        </>
    }
}

export default PureComponent2;