import { Component } from "react";

class LifeCycle1 extends Component{
    constructor(){
        // super() call constructor of Component class
        super();
        console.log("Constructor Method Called");
    }

    render(){
        console.log("Render Method Called");
        return <>
            <h1>Life Cycle Methods in React JS</h1>
        </>
    }

    componentDidMount(){
        console.log("Component did Mount Method Called");
    }
}

export default LifeCycle1;