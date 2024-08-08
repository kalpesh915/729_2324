import React, { Component } from "react";

class EventDemo7 extends Component{
    constructor(){
        // Call constructor of Compoent Class
        super();
        
        // define state
        this.state = {
            ip1 : 10,
            username : "Udit"
        }
    }

    render(){
        return <>
            <h1>Example of State in Class Component</h1>
            <h1>Welcome {this.state.username}  value of ip1 {this.state.ip1} </h1>
        </>
    }
}

export default EventDemo7;