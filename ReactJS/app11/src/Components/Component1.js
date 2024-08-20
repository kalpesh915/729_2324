import ChildComponent from "./ChildComponent";

function printer(counter) {
    console.log("Counter in Parent Component " + counter);
}

function Component1() {

    return <>
        <h1>State Lifting Example</h1>
        <ChildComponent printer={printer}></ChildComponent>
    </>
}

export default Component1;