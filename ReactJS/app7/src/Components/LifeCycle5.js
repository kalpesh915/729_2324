import { Component } from "react";

class LifeCycle5 extends Component{
    constructor(){
        // super() call constructor of Component class
        super();
        console.log("Constructor Method Called");

        this.state = {
            count : 1
        }
    }

    render(){
        console.log("Render Method Called");
        return <>
            <h1>Life Cycle Methods in React JS</h1>
            <h1>Count is {this.state.count}</h1>
            <button onClick={()=>this.setState({count : this.state.count + 1})}>Update Count</button>
        </>
    }

    componentDidMount(){
        console.log("Component did Mount Method Called");
    }

    componentDidUpdate(){
        console.log("Component did Update Method Called");
        // this.setState({count : 100});
    }

    shouldComponentUpdate(){
        return true;
    }

    componentWillUnmount(){
        console.log("Component will unMount Method Called");
    }
}

export default LifeCycle5;