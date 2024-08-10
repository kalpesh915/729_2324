import { Component } from "react";

class StateDemo5 extends Component{
    constructor(){
        super();

        // to create state in class component

        this.state = {
            roll : 5,
            username : "Neel"
        }
    }

    /*render(){
        return (
            <h1>State Example in Class Component</h1>
        )
    }*/

    render(){
        return <>
            <h1>State Example in Class Component</h1>
            <h1>Welcome {this.state.username} your roll no. is {this.state.roll}</h1>
            <button onClick={()=>this.setState({username : "Bhalabhai"})}>Change Name</button>
            <button onClick={()=>this.setState({roll : this.state.roll + 1})}>Update Roll No.</button>
        </>
    }
}

export default StateDemo5;