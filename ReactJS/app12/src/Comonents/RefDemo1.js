const { Component, createRef } = require("react");

class RefDemo1 extends Component{
    constructor(){
        super();

        this.inputRef = createRef();
    }

    render(){
        return <>
            <h1>Example of References in Class Component</h1>
            <input type="text" ref={this.inputRef}></input>
            <button onClick={()=>{
                this.inputRef.current.value = "Welcome";
                this.inputRef.current.style.backgroundColor = "yellow";
                this.inputRef.current.style.color = "red";
            }}>Click Me</button>
        </>
    }
}

export default RefDemo1;