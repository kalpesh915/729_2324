import { Component } from "react";

class StateDemo6 extends Component{
    constructor(){
        super();
        this.state = {
            username : "Neel"
        }
    }

    render(){
        return <>
            <h1>State Example in Class Component</h1>
            {/* <input type="text" onKeyUp={(e)=>this.setState({
                username : e.target.value
            })} value={this.state.username}></input> */}
            <input type="text" onKeyUp={(e)=>this.setState({
                username : e.target.value
            })} defaultValue={this.state.username}></input>
            <h1>Welcome {this.state.username},</h1>
        </>
    }
}

export default StateDemo6;