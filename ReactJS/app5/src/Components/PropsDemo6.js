import { Component } from "react";

class PropsDemo6 extends Component{
    constructor(){
        super();
    }

    render(){
        return <>
            <h1>Props Demo with Class Component</h1>
            <p>Welcome {this.props.data.username} to {this.props.data.city}</p>
        </>
    }
}

export default PropsDemo6;