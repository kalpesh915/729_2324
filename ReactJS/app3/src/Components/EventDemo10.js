import React, { Component } from "react";

class EventDemo10 extends Component{
    constructor(){
        // Call constructor of Compoent Class
        super();
        
        // define state
        this.state = {
            username : "Udit Ghetiya"
        }
    }

    render(){
        return <>
            <h1>Example of State in Class Component</h1>
            <input type="text" defaultValue={this.state.username} onKeyUp={(evt)=>this.setState({username : evt.target.value})}></input>
            <h1>Welcome {this.state.username} </h1>
        </>
    }
}

export default EventDemo10;