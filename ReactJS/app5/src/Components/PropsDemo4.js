import { Component } from "react";

class PropsDemo4 extends Component{
    constructor(){
        super();
    }

    render(){
        return <>
            <h1>Props Demo with Class Component</h1>
            <p>Welcome {this.props.username}</p>
        </>
    }
}

export default PropsDemo4;