import { Component } from "react";

class LifeCycle4 extends Component{
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
        console.log("Should Component Update Method Called");
        //return true;
        if(this.state.count >= 10){
            return true;
        }else{
            return false;
        }
    }
}

export default LifeCycle4;