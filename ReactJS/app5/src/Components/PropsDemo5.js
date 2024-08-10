import { Component } from "react";

class PropsDemo5 extends Component{
    constructor(){
        super();
    }

    render(){
        return <>
            <h1>Props Demo with Class Component</h1>
            <p>Welcome {this.props.username} to {this.props.city}</p>
        </>
    }
}

export default PropsDemo5;