import React from "react";

function ParentComponent(){
    return <>
        <h1>Parent Component</h1>
        <ChildComponent></ChildComponent>
    </>
}

function ChildComponent(){
    //return <h2>Child Component</h2>
    return React.createElement("h1", "", "Demo Text");
}

export default ParentComponent;